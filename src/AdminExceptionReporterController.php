<?php

namespace Admin\Extend\AdminExceptionReporter;

use Admin\Extend\AdminExceptionReporter\Models\ExceptionModel;
use Admin\Extend\AdminExceptionReporter\Tracer\Parser;
use Admin\Models\AdminUser;
use Admin\Page;
use App\Admin\Controllers\Controller;
use App\Admin\Delegates\Buttons;
use App\Admin\Delegates\Card;
use App\Admin\Delegates\Form;
use App\Admin\Delegates\SearchForm;
use App\Admin\Delegates\ModelTable;
use App\Admin\Delegates\ModelInfoTable;
use Lar\Layout\Respond;

class AdminExceptionReporterController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = ExceptionModel::class;

    public function defaultTools($type)
    {
        return !($type === 'add');
    }

    /**
     * @param  Page  $page
     * @param  Card  $card
     * @param  SearchForm  $searchForm
     * @param  ModelTable  $modelTable
     * @param  Buttons  $buttons
     * @return Page
     */
    public function index(
        Page $page,
        Card $card,
        SearchForm $searchForm,
        ModelTable $modelTable,
        Buttons $buttons,
    ) : Page {
        return $page->card(
            $card->search_form(
                $searchForm->id(),
                $searchForm->input('type', 'Type'),
                $searchForm->input('message', 'Message'),
                $searchForm->at(),
            ),
            $card->model_table(
                $modelTable->model(fn ($q) => $q->orderBy('id', 'desc')),
                $modelTable->id(),
                $modelTable->col('Type', function (ExceptionModel $model) {
                    $path = explode('\\', $model->type);
                    return array_pop($path);
                })->sort('type')->to_export(),
                $modelTable->col('Code', function (ExceptionModel $model) {
                    return $model->code . ' ';
                })->sort()->to_export(),
                $modelTable->col('Message', function (ExceptionModel $model) {
                    $message = $model->message;

                    if (empty($message)) {
                        return '';
                    }

                    return "<code>$message</code>";
                })->sort(),
                $modelTable->col('Message', 'message')->sort()->only_export(),
                $modelTable->col('Request', function (ExceptionModel $model) {
                    $color = ExceptionModel::$methodColor[$model->method];

                    return sprintf(
                        '<span class="label bg-%s">%s</span> <code>%s</code>',
                        $color,
                        $model->method,
                        $model->path
                    );
                })->sort('request'),
                $modelTable->controlEdit(false),
            ),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param Form $form
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form) : Page
    {
        return $page->card(
            $card->form(
                $form->ifEdit()->info_id(),
                $form->ifEdit()->info_updated_at(),
                $form->ifEdit()->info_created_at(),
            ),
            $card->footer_form(),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param ModelInfoTable $modelInfoTable
     * @return Page
     */
    public function show(Page $page, Card $card, ModelInfoTable $modelInfoTable) : Page
    {
        $exception = $this->model();
        $trace = "#0 {$exception->file}({$exception->line})\n";
        $frames = (new Parser($trace.$exception->trace))->parse();
        $cookies = json_decode($exception->cookies, true);
        $headers = json_decode($exception->headers, true);

        array_pop($frames);

        return $page->card(
            $card->view('bfg-admin-exception-reporter::exception', compact('exception', 'frames', 'cookies', 'headers')),
        );
    }

}
