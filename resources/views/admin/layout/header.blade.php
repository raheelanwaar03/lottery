<!doctype html>
<html lang="en"><!-- [Head] start -->
<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2024 13:02:28 GMT -->

<head>
    <title>Home | Able Pro Dashboard Template</title><!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Phoenixcoded">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin/asset/fonts/inter/inter.css') }}" id="main-font-link">
    <link rel="stylesheet" href="{{ asset('admin/asset/fonts/phosphor/duotone/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/css/style-preset.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">


</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light"><!-- [ Pre-loader ] start -->
    <div class="page-loader">
        <div class="bar"></div>
    </div>

    <x-alert />

    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header"><a href="index.html"
                    class="b-brand text-primary"><!-- ========   Change your logo from here   ============ --> <img
                        src="https://ableproadmin.com/assets/images/logo-dark.svg') }}" class="img-fluid logo-lg"
                        alt="logo">
                    <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.4.1</span></a></div>
            <div class="navbar-content">
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0"><img src="{{ asset('admin/asset/images/user/avatar-1.jpg') }}"
                                    alt="user-image" class="user-avtar wid-45 rounded-circle"></div>
                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                                <small>{{ auth()->user()->role }}</small>
                            </div><a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                                href="#pc_sidebar_userlink"><svg class="pc-icon">
                                    <use xlink:href="#custom-sort-outline"></use>
                                </svg></a>
                        </div>
                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                            <div class="pt-3">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger"><i class="ti ti-power"></i>
                                        <span>Logout</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption"><label>Admin Panel</label> <svg class="pc-icon">
                            <use xlink:href="#custom-layer"></use>
                        </svg></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-user"></use>
                                </svg> </span><span class="pc-mtext">Users</span> <span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/admins/course-dashboard.html">All Users</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-layer"></use>
                                </svg>
                            </span><span class="pc-mtext">Lotteries</span> <span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('Admin.Add.Lottery') }}">ADD</a></li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('Admin.All.Lottery') }}">ALL</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-24-support"></use>
                                </svg> </span><span class="pc-mtext">Coin</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('Admin.Add.Coins') }}">Add
                                    Coin</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-bill"></use>
                                </svg> </span><span class="pc-mtext">Store</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('Admin.Add.Product') }}">Add Product</a></li>
                        </ul>
                    </li>
                    {{-- <li class="pc-item pc-caption"><label>UI Components</label> <svg class="pc-icon">
                            <use xlink:href="#custom-box-1"></use>
                        </svg></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/elements/bc_alert.html" class="pc-link"
                            target="_blank"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-box-1"></use>
                                </svg> </span><span class="pc-mtext">Components</span></a></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/elements/animation.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-flag"></use>
                                </svg> </span><span class="pc-mtext">Animation</span></a></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-mouse-circle"></use>
                                </svg> </span><span class="pc-mtext">Icons</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/elements/icon-feather.html">Feather</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/elements/icon-fontawesome.html">Font Awesome 5</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/elements/icon-material.html">Material</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/elements/icon-tabler.html">Tabler</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/elements/icon-phosphor.html">Phosphor</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/elements/icon-custom.html">Custom</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption"><label>Forms</label> <svg class="pc-icon">
                            <use xlink:href="#custom-element-plus"></use>
                        </svg></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-element-plus"></use>
                                </svg> </span><span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form_elements.html">Form Basic</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form_floating.html">Form Floating</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_basic.html">Form Options</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_input_group.html">Input Groups</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_checkbox.html">Checkbox</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_radio.html">Radio</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_switch.html">Switch</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_megaoption.html">Mega option</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-cpu-charge"></use>
                                </svg> </span><span class="pc-mtext">Forms Plugins</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#">Date<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/form2_datepicker.html">Datepicker</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/form2_daterangepicker.html">Date Range
                                            Picker</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/form2_timepicker.html">Timepicker</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#">Select<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/form2_choices.html">Choices js</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_rating.html">Rating</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_recaptcha.html">Google reCaptcha</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_inputmask.html">Input Masks</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_clipboard.html">Clipboard</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_nouislider.html">Nouislider</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_switchjs.html">Bootstrap Switch</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_typeahead.html">Typeahead</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-text-block"></use>
                                </svg> </span><span class="pc-mtext">Text Editors</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_tinymce.html">Tinymce</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_quill.html">Quill</a></li>
                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#">CK editor<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/editor-classic.html">classic</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/editor-document.html">Document</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/editor-inline.html">Inline</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/forms/editor-balloon.html">Balloon</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-row-vertical"></use>
                                </svg> </span><span class="pc-mtext">Form Layouts</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_lay-default.html">Layouts</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_lay-multicolumn.html">Multicolumn</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_lay-actionbars.html">Actionbars</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_lay-stickyactionbars.html">Sticky Action
                                    bars</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-document-upload"></use>
                                </svg> </span><span class="pc-mtext">File upload</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/file-upload.html">Dropzone</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/forms/form2_flu-uppy.html">Uppy</a></li>
                        </ul>
                    </li>
                    <li class="pc-item"><a href="https://ableproadmin.com/forms/form2_wizard.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-password-check"></use>
                                </svg> </span><span class="pc-mtext">wizard</span></a></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/forms/form-validation.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-kanban"></use>
                                </svg> </span><span class="pc-mtext">Form Validation</span></a></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/forms/image_crop.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-crop"></use>
                                </svg> </span><span class="pc-mtext">Image cropper</span></a></li>
                    <li class="pc-item pc-caption"><label>table</label> <svg class="pc-icon">
                            <use xlink:href="#custom-text-align-justify-center"></use>
                        </svg></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-text-align-justify-center"></use>
                                </svg> </span><span class="pc-mtext">Bootstrap Table</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_bootstrap.html">Basic table</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_sizing.html">Sizing table</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_border.html">Border table</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_styling.html">Styling table</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-keyboard"></use>
                                </svg> </span><span class="pc-mtext">Vanilla Table</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-simple.html">Basic initialization</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-dynamic-import.html">Dynamic Import</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-render-column-cells.html">Render Column
                                    Cells</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-column-manipulation.html">Column
                                    Manipulation</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-datetime-sorting.html">Datetime
                                    Sorting</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-methods.html">Methods</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-add-rows.html">Add Rows</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-fetch-api.html">Fetch API</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-filters.html">Filters</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/tbl_dt-export.html">Export</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-graph"></use>
                                </svg> </span><span class="pc-mtext">Data table</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_advance.html">Advance initialization</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_styling.html">Styling</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_api.html">API</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_plugin.html">Plug-in</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_sources.html">Data sources</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-add-item"></use>
                                </svg> </span><span class="pc-mtext">DT extensions</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_autofill.html">Autofill</a></li>
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Button<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/table/dt_ext_basic_buttons.html">Basic
                                            button</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="https://ableproadmin.com/table/dt_ext_export_buttons.html">Data
                                            export</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_col_reorder.html">Col reorder</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_fixed_columns.html">Fixed columns</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_fixed_header.html">Fixed header</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_key_table.html">Key table</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_responsive.html">Responsive</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_row_reorder.html">Row reorder</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_scroller.html">Scroller</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/table/dt_ext_select.html">Select table</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption"><label>Charts &and; Maps</label> <svg class="pc-icon">
                            <use xlink:href="#custom-graph"></use>
                        </svg></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-graph"></use>
                                </svg> </span><span class="pc-mtext">Charts</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/chart/chart-apex.html">Apex Chart</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/chart/chart-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-shapes"></use>
                                </svg> </span><span class="pc-mtext">Maps</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/chart/map-vector.html">Vector Maps</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/chart/map-gmap.html">Gmaps</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption"><label>Application</label> <svg class="pc-icon">
                            <use xlink:href="#custom-shopping-bag"></use>
                        </svg></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/application/calendar.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-calendar-1"></use>
                                </svg> </span><span class="pc-mtext">Calendar</span></a></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/application/chat.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-message-2"></use>
                                </svg> </span><span class="pc-mtext">Chat</span></a></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/application/cust_customer_list.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-notification-status"></use>
                                </svg> </span><span class="pc-mtext">Customer</span></a></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-shopping-bag"></use>
                                </svg> </span><span class="pc-mtext">E-commerce</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/ecom_product.html">Product</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/ecom_product-details.html">Product
                                    details</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/ecom_product-list.html">Product List</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/ecom_product-add.html">Add New
                                    Product</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/ecom_checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="pc-item"><a href="https://ableproadmin.com/application/file-manager.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-document-filter"></use>
                                </svg> </span><span class="pc-mtext">File manager</span></a></li>
                    <li class="pc-item"><a href="https://ableproadmin.com/application/mail.html"
                            class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-direct-inbox"></use>
                                </svg> </span><span class="pc-mtext">Mail</span></a></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-user-square"></use>
                                </svg> </span><span class="pc-mtext">Users</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/account-profile.html">Account
                                    Profile</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/application/social-media.html">Social media</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption"><label>Pages</label> <svg class="pc-icon">
                            <use xlink:href="#custom-flag"></use>
                        </svg></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-shield"></use>
                                </svg> </span><span class="pc-mtext">Authentication</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Authentication 1<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/login-v1.html">Login</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/register-v1.html">Register</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/forgot-password-v1.html">Forgot
                                            Password</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/check-mail-v1.html">check mail</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/reset-password-v1.html">reset
                                            password</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/code-verification-v1.html">code
                                            verification</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Authentication 2<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/login-v2.html">Login</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/register-v2.html">Register</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/forgot-password-v2.html">Forgot
                                            password</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/check-mail-v2.html">check mail</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/reset-password-v2.html">reset
                                            password</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/code-verification-v2.html">code
                                            verification</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a href="https://ableproadmin.com/pages/login-v3.html"
                                    target="_blank" class="pc-link">Authentication 3</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-flag"></use>
                                </svg> </span><span class="pc-mtext">Maintenance</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" target="_blank"
                                    href="https://ableproadmin.com/pages/error-404.html">Error 404</a></li>
                            <li class="pc-item"><a class="pc-link" target="_blank"
                                    href="https://ableproadmin.com/pages/error-500.html">Error 500</a></li>
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Under construction<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/under-construction-v1.html">Under
                                            Construction 1</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/under-construction-v2.html">Under
                                            Construction 2</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Coming soon<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/coming-soon-v1.html">Coming soon 1</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="https://ableproadmin.com/pages/coming-soon-v2.html">Coming soon 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item"><a href="https://ableproadmin.com/pages/contact-us.html" class="pc-link"
                            target="_blank"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-24-support"></use>
                                </svg> </span><span class="pc-mtext">Contact us</span></a></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-dollar-square"></use>
                                </svg> </span><span class="pc-mtext">Price</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/pages/price-v1.html">Price 1</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="https://ableproadmin.com/pages/price-v2.html">Price 2</a></li>
                        </ul>
                    </li>
                    <li class="pc-item"><a href="https://ableproadmin.com/pages/landing.html" class="pc-link"
                            target="_blank"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-airplane"></use>
                                </svg> </span><span class="pc-mtext">Landing</span></a></li>
                    <li class="pc-item pc-caption"><label>Other</label> <svg class="pc-icon">
                            <use xlink:href="#custom-notification-status"></use>
                        </svg></li>
                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-level"></use>
                                </svg> </span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level 2.2<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level 3.3<span
                                                class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level 2.3<span
                                        class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level 3.3<span
                                                class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav><!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper"><!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0"
                            id="sidebar-hide"><i class="ti ti-menu-2"></i></a></li>
                    <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0"
                            id="mobile-collapse"><i class="ti ti-menu-2"></i></a></li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="form-search"><i class="search-icon"><svg class="pc-icon">
                                    <use xlink:href="#custom-search-normal-1"></use>
                                </svg> </i><input type="search" class="form-control" placeholder="Ctrl + K">
                        </form>
                    </li>
                </ul>
            </div><!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false"><svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!"
                                class="dropdown-item" onclick="layout_change('dark')"><svg class="pc-icon">
                                    <use xlink:href="#custom-moon"></use>
                                </svg> <span>Dark</span> </a><a href="#!" class="dropdown-item"
                                onclick="layout_change('light')"><svg class="pc-icon">
                                    <use xlink:href="#custom-sun-1"></use>
                                </svg> <span>Light</span> </a><a href="#!" class="dropdown-item"
                                onclick="layout_change_default()"><svg class="pc-icon">
                                    <use xlink:href="#custom-setting-2"></use>
                                </svg> <span>Default</span></a></div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile"><a
                            class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                            aria-expanded="false"><img src="{{ asset('admin/asset/images/user/avatar-2.jpg') }}"
                                alt="user-image" class="user-avtar"></a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Profile</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative"
                                    style="max-height: calc(100vh - 225px)">
                                    <div class="d-flex mb-1">
                                        <div class="flex-shrink-0"><img
                                                src="{{ asset('admin/asset/images/user/avatar-2.jpg') }}"
                                                alt="user-image" class="user-avtar wid-35"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">{{ auth()->user()->name }} 🖖</h6>
                                            <span>{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                    <hr class="border-secondary border-opacity-50">
                                    <p class="text-span">Manage</p>
                                    <a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-lock-outline"></use>
                                            </svg> <span>Change Password</span></span>
                                    </a>
                                    <hr class="border-secondary border-opacity-50">
                                    <div class="d-grid mb-3">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary"><svg class="pc-icon me-2">
                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                </svg>Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
