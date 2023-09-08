<style>
    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }
    .panel-body {
        padding: 15px;
    }
    .dark-mode .panel-body {
        background-color: #343a40;
    }
    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel-heading > .dropdown .dropdown-toggle {
        color: inherit;
    }
    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit;
    }
    .panel-title > a,
    .panel-title > small,
    .panel-title > .small,
    .panel-title > small > a,
    .panel-title > .small > a {
        color: inherit;
    }
    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .list-group,
    .panel > .panel-collapse > .list-group {
        margin-bottom: 0;
    }
    .panel > .list-group .list-group-item,
    .panel > .panel-collapse > .list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0;
    }
    .panel > .list-group:first-child .list-group-item:first-child,
    .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel > .list-group:last-child .list-group-item:last-child,
    .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .panel-heading + .list-group .list-group-item:first-child {
        border-top-width: 0;
    }
    .list-group + .panel-footer {
        border-top-width: 0;
    }
    .panel > .table,
    .panel > .table-responsive > .table,
    .panel > .panel-collapse > .table {
        margin-bottom: 0;
    }
    .panel > .table caption,
    .panel > .table-responsive > .table caption,
    .panel > .panel-collapse > .table caption {
        padding-right: 15px;
        padding-left: 15px;
    }
    .panel > .table:first-child,
    .panel > .table-responsive:first-child > .table:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel > .table:first-child > thead:first-child > tr:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
    .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
        border-top-left-radius: 3px;
    }
    .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
    .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
        border-top-right-radius: 3px;
    }
    .panel > .table:last-child,
    .panel > .table-responsive:last-child > .table:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .table:last-child > tbody:last-child > tr:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
        border-bottom-left-radius: 3px;
    }
    .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
        border-bottom-right-radius: 3px;
    }
    .panel > .panel-body + .table,
    .panel > .panel-body + .table-responsive,
    .panel > .table + .panel-body,
    .panel > .table-responsive + .panel-body {
        border-top: 1px solid #ddd;
    }
    .panel > .table > tbody:first-child > tr:first-child th,
    .panel > .table > tbody:first-child > tr:first-child td {
        border-top: 0;
    }
    .panel > .table-bordered,
    .panel > .table-responsive > .table-bordered {
        border: 0;
    }
    .panel > .table-bordered > thead > tr > th:first-child,
    .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
    .panel > .table-bordered > tbody > tr > th:first-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .panel > .table-bordered > tfoot > tr > th:first-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
    .panel > .table-bordered > thead > tr > td:first-child,
    .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
    .panel > .table-bordered > tbody > tr > td:first-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
    .panel > .table-bordered > tfoot > tr > td:first-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0;
    }
    .panel > .table-bordered > thead > tr > th:last-child,
    .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
    .panel > .table-bordered > tbody > tr > th:last-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .panel > .table-bordered > tfoot > tr > th:last-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
    .panel > .table-bordered > thead > tr > td:last-child,
    .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
    .panel > .table-bordered > tbody > tr > td:last-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
    .panel > .table-bordered > tfoot > tr > td:last-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0;
    }
    .panel > .table-bordered > thead > tr:first-child > td,
    .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
    .panel > .table-bordered > tbody > tr:first-child > td,
    .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
    .panel > .table-bordered > thead > tr:first-child > th,
    .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
    .panel > .table-bordered > tbody > tr:first-child > th,
    .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
        border-bottom: 0;
    }
    .panel > .table-bordered > tbody > tr:last-child > td,
    .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
    .panel > .table-bordered > tfoot > tr:last-child > td,
    .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
    .panel > .table-bordered > tbody > tr:last-child > th,
    .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
    .panel > .table-bordered > tfoot > tr:last-child > th,
    .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
        border-bottom: 0;
    }
    .panel > .table-responsive {
        margin-bottom: 0;
        border: 0;
    }
    .panel-group {
        margin-bottom: 20px;
    }
    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px;
    }
    .panel-group .panel + .panel {
        margin-top: 5px;
    }
    .panel-group .panel-heading {
        border-bottom: 0;
    }
    .panel-group .panel-heading + .panel-collapse > .panel-body,
    .panel-group .panel-heading + .panel-collapse > .list-group {
        border-top: 1px solid #ddd;
    }
    .panel-group .panel-footer {
        border-top: 0;
    }
    .panel-group .panel-footer + .panel-collapse .panel-body {
        border-bottom: 1px solid #ddd;
    }
    .panel-default {
        border-color: #ddd;
    }
    .dark-mode .panel-default {
        border-color: #2c3338;
    }
    .panel-default > .panel-heading {
        color: #333333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    .dark-mode .panel-default > .panel-heading {
        color: #ffffff;
        background-color: #454d55 !important;
        border-color: #2c3338 !important;
    }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ddd;
    }
    .dark-mode .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #2c3338 !important;
    }
    .panel-default > .panel-heading .badge {
        color: #f5f5f5;
        background-color: #333333;
    }
    .panel-default > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ddd;
    }
    .panel-primary {
        border-color: #337ab7;
    }
    .panel-primary > .panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7;
    }
    .panel-primary > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #337ab7;
    }
    .panel-primary > .panel-heading .badge {
        color: #337ab7;
        background-color: #fff;
    }
    .panel-primary > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #337ab7;
    }
    .panel-success {
        border-color: #d6e9c6;
    }
    .panel-success > .panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
    .panel-success > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #d6e9c6;
    }
    .panel-success > .panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d;
    }
    .panel-success > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #d6e9c6;
    }
    .panel-info {
        border-color: #bce8f1;
    }
    .panel-info > .panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }
    .panel-info > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #bce8f1;
    }
    .panel-info > .panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f;
    }
    .panel-info > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #bce8f1;
    }
    .panel-warning {
        border-color: #faebcc;
    }
    .panel-warning > .panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }
    .panel-warning > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #faebcc;
    }
    .panel-warning > .panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b;
    }
    .panel-warning > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #faebcc;
    }
    .panel-danger {
        border-color: #ebccd1;
    }
    .panel-danger > .panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
    .panel-danger > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ebccd1;
    }
    .panel-danger > .panel-heading .badge {
        color: #f2dede;
        background-color: #a94442;
    }
    .panel-danger > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ebccd1;
    }
</style>

<script>
    Prism.highlightAll();
</script>

<div class="box box-primary">

    <!-- /.box-header -->
    <div class="box-body p-2">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->


        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-paper-plane">&nbsp;&nbsp;</i><strong>Request</strong>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">

                        <table class="table args" style="margin: 0px;">
                            <tbody>
                                @if($exception->method)
                                    <tr>
                                        <td style="width: 40px;">&nbsp;</td>
                                        <td class="name">method</td>
                                        <td class="value">{{ $exception->method }}</td>
                                    </tr>
                                @endif

                                @if($exception->path)
                                    <tr>
                                        <td style="width: 40px;">&nbsp;</td>
                                        <td class="name">url</td>
                                        <td class="value">{{ $exception->path }}</td>
                                    </tr>
                                @endif

                                @if($exception->query)
                                    <tr>
                                        <td style="width: 40px;">&nbsp;</td>
                                        <td class="name">query</td>
                                        <td class="value">{{ $exception->query }}</td>
                                    </tr>
                                @endif

                                @if($exception->body)
                                    <tr>
                                        <td style="width: 40px;">&nbsp;</td>
                                        <td class="name">body</td>
                                        <td class="value">{{ $exception->body }}</td>
                                    </tr>
                                @endif

                                <tr>
                                    <td style="width: 40px;">&nbsp;</td>
                                    <td class="name">time</td>
                                    <td class="value">{{ $exception->created_at }}</td>
                                </tr>

                                <tr>
                                    <td style="width: 40px;">&nbsp;</td>
                                    <td class="name">client ip</td>
                                    <td class="value">{{ $exception->ip }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-server">&nbsp;&nbsp;</i><strong>Headers</strong>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">

                        <table class="table args" style="margin: 0px;">
                            <tbody>
                                @foreach($headers as $name => $values)
                                    <tr>
                                        <td style="width: 40px;">&nbsp;</td>
                                        <td class="name">{{ $name }}</td>
                                        <td class="value">
                                            @foreach($values as $value)
                                                <dd><div class="value">{{ $value }}</div></dd>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-database"></i>&nbsp;&nbsp;<strong>Cookies</strong>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">

                        <table class="table args" style="margin: 0px;">
                            <tbody>
                            @foreach($cookies as $name => $value)
                                <tr>
                                    <td style="width: 40px;">&nbsp;</td>
                                    <td class="name">{{ $name }}</td>
                                    <td class="value">
                                        <dd><div class="value">{{ $value }}</div></dd>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="box box-primary">

    <!-- /.box-header -->
    <div class="box-body">
        <div class="browser-window">

            @if ($exception->code || $exception->message)
                <table class="table args" style="margin: 0px;">
                    <tbody>
                    <tr>

                        <td style="width: 40px;">&nbsp;</td>
                        <td class="name"><strong>Exception</strong></td>
                        <td class="value"><code>{{ $exception->type }}</code></td>
                    </tr>
                    <tr>
                        @if ($exception->code)
                            <td style="width: 40px;">&nbsp;</td>
                            <td class="name"><strong>Code</strong></td>
                            <td class="value">{{ $exception->code }}</td>
                        @endif

                        @if ($exception->message)
                            <td style="width: 40px;">&nbsp;</td>
                            <td class="name"><strong>Message</strong></td>
                            <td class="value"><strong><em>{{ $exception->message }}</em></strong></td>
                        @endif
                    </tr>
                    </tbody>
                </table>
            @endif

            @foreach($frames as $index => $frame)
                <div data-toggle="collapse" data-target="#frame-{{ $index }}" style="border-top: 2px #6c757d solid;padding: 10px 0px 10px 20px;">
                    <i class="fa fa-info" style="color: #4c748c;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0);">{{ str_replace(base_path() . '/', '', $frame->file()) }}</a>
                    in <a href="javascript:void(0);">{{ $frame->method() }}</a> at line <span class="badge badge-info">{{ $frame->line() }}</span>
                </div>
                <div class="window-content collapse {{ $index == 0 ? 'in' : '' }}" id="frame-{{ $index }}">
                    <pre data-start="{!! $frame->getCodeBlock()->getStartLine() !!}" data-line="{!! $frame->line()-$frame->getCodeBlock()->getStartLine()+1  !!} " class="language-php line-numbers"><code>{!! $frame->getCodeBlock()->output() !!}</code></pre>
                    <table class="table args" style="margin: 10px 0px 0px 0px;">
                        <tbody>
                        @foreach($frame->args() as $name => $val)
                            <tr>
                                <td style="width: 40px;">&nbsp;</td>
                                <td class="name"><strong>{{ $name }}</strong></td>
                                <td class="value">{{ $val }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            @endforeach
        </div>

    </div>
</div>
