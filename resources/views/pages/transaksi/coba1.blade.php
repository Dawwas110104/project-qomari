@extends('layouts.app')

@section('content')
<div class="content">
    <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span>Inbox (23)</span>
    <div class="space-x-1">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-compose">New Message</button>
        <button type="button" class="btn btn-sm btn-alt-primary d-md-none" data-toggle="class-toggle" data-target=".js-inbox-nav" data-class="d-none d-md-block">Menu</button>
    </div>
    </h2>
    <div class="row">
    <div class="col-md-5 col-xl-3">
        <!-- Collapsible Inbox Navigation -->
        <div class="js-inbox-nav d-none d-md-block">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
            <h3 class="block-title">Navigation</h3>
            <div class="block-options">
                <div class="dropdown">
                <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-flask opacity-50 me-1"></i> Filter
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-cogs opacity-50 me-1"></i> Manage
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="block-content p-3">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                    <span><i class="fa fa-fw fa-inbox opacity-50 me-1"></i> Inbox</span>
                    <span class="badge bg-black-50">23</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span><i class="fa fa-fw fa-star opacity-50 me-1"></i> Starred</span>
                    <span class="badge bg-black-50">30</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span><i class="fa fa-fw fa-paper-plane opacity-50 me-1"></i> Sent</span>
                    <span class="badge bg-black-50">79</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span><i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Draft</span>
                    <span class="badge bg-black-50">10</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span><i class="fa fa-fw fa-folder opacity-50 me-1"></i> Archive</span>
                    <span class="badge bg-black-50">99</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span><i class="fa fa-fw fa-trash-alt opacity-50 me-1"></i> Trash</span>
                    <span class="badge bg-black-50">13</span>
                </a>
                </li>
                <li class="nav-item">
                <hr class="my-1">
                </li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                    <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Create label
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!-- END Collapsible Inbox Navigation -->

        <!-- Recent Contacts -->
        <div class="block d-none d-md-block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Recent Contacts</h3>
            <div class="block-options">
            <div class="dropdown">
                <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item active" href="javascript:void(0)">
                    <i class="fa fa-fw fa-users opacity-50 me-1"></i> All
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle opacity-50 text-success me-1"></i> Online
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle opacity-50 text-danger me-1"></i> Busy
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle opacity-50 text-warning me-1"></i> Away
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle opacity-50 text-muted me-1"></i> Offline
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-cogs opacity-50 me-1"></i> Manage
                </a>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content p-3">
            <ul class="nav-users">
            <li>
                <a href="be_pages_generic_profile.html">
                <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                <i class="fa fa-circle text-success"></i>
                <div>Amber Harvey</div>
                <div class="fw-normal fs-xs text-muted">
                    <i class="fa fa-location-arrow"></i> New York
                </div>
                </a>
            </li>
            <li>
                <a href="be_pages_generic_profile.html">
                <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                <i class="fa fa-circle text-success"></i>
                <div>Carl Wells</div>
                <div class="fw-normal fs-xs text-muted">
                    <i class="fa fa-location-arrow"></i> San Fransisco
                </div>
                </a>
            </li>
            <li>
                <a href="be_pages_generic_profile.html">
                <img class="img-avatar" src="assets/media/avatars/avatar2.jpg" alt="">
                <i class="fa fa-circle text-warning"></i>
                <div>Melissa Rice</div>
                <div class="fw-normal fs-xs text-muted">
                    <i class="fa fa-location-arrow"></i> Beijing
                </div>
                </a>
            </li>
            <li>
                <a href="be_pages_generic_profile.html">
                <img class="img-avatar" src="assets/media/avatars/avatar16.jpg" alt="">
                <i class="fa fa-circle text-warning"></i>
                <div>Jose Mills</div>
                <div class="fw-normal fs-xs text-muted">
                    <i class="fa fa-location-arrow"></i> Tokyo
                </div>
                </a>
            </li>
            <li>
                <a href="be_pages_generic_profile.html">
                <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                <i class="fa fa-circle text-danger"></i>
                <div>Jose Parker</div>
                <div class="fw-normal fs-xs text-muted">
                    <i class="fa fa-location-arrow"></i> London
                </div>
                </a>
            </li>
            <li>
                <a href="be_pages_generic_profile.html">
                <img class="img-avatar" src="assets/media/avatars/avatar4.jpg" alt="">
                <i class="fa fa-circle text-danger"></i>
                <div>Susan Day</div>
                <div class="fw-normal fs-xs text-muted">
                    <i class="fa fa-location-arrow"></i> Rio De Janeiro
                </div>
                </a>
            </li>
            </ul>
        </div>
        </div>
        <!-- END Recent Contacts -->
    </div>
        <div class="col-md-7 col-xl-9">
            <!-- Message List -->
            <div class="block block-rounded">
            <div class="block-header block-header-default">
                <div class="block-title">
                <strong>1-10</strong> from <strong>23</strong>
                </div>
                <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option">
                    <i class="si si-arrow-left"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option">
                    <i class="si si-arrow-right"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </div>
            </div>
            <div class="block-content">
                <!-- Messages -->
                <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.cbTableToolsCheckable()) -->
                <table class="js-table-checkable table table-hover table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 40px;">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cb-inbox-all" name="cb-inbox-all">
                            <label class="form-check-label" for="cb-inbox-all"></label>
                            </div>
                        </th>
                        <th colspan="3">
                            <!-- Messages Options -->
                            <div class="d-flex justify-content-between">
                            <div>
                                <button type="button" class="btn btn-alt-secondary">
                                <i class="fa fa-fw fa-archive"></i>
                                </button>
                                <button type="button" class="btn btn-alt-secondary">
                                <i class="fa fa-fw fa-star"></i>
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-alt-secondary">
                                <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                            </div>
                            <!-- END Messages Options -->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cb-inbox-1" name="cb-inbox-1">
                            <label class="form-check-label" for="cb-inbox-1"></label>
                            </div>
                        </td>
                        <td class="d-none d-sm-table-cell fw-semibold" style="width: 140px;">{{ $data->donatur_name }}</td>
                        <td>
                            <a class="fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-message" href="#">Welcome to our service</a>
                            <div class="text-muted mt-1">It's a pleasure to have you on our service..</div>
                        </td>
                        <td class="d-none d-xl-table-cell fw-semibold fs-sm text-muted" style="width: 120px;">WED</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <!-- END Messages -->
            </div>
            </div>
            <!-- END Message List -->
        </div>
    </div>

    <!-- Compose Modal -->
    <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="my-2" action="be_pages_generic_inbox.html" method="POST" onsubmit="return false;">
                <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                    <i class="fa fa-pencil-alt opacity-50 me-1"></i> New Message
                    </h3>
                    <div class="block-options">
                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="mb-4">
                    <label class="form-label" for="message-email">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="message-email" name="message-email" placeholder="Where to send?">
                        <span class="input-group-text">
                        <i class="si si-envelope-open"></i>
                        </span>
                    </div>
                    </div>
                    <div class="mb-4">
                    <label class="form-label" for="message-subject">Subject</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="message-subject" name="message-subject" placeholder="What is this about?">
                        <span class="input-group-text">
                        <i class="si si-book-open"></i>
                        </span>
                    </div>
                    </div>
                    <div class="mb-4">
                    <label class="form-label" for="message-msg">Message</label>
                    <textarea class="form-control" id="message-msg" name="message-msg" rows="6" placeholder="Write your message.."></textarea>
                    <div class="form-text fs-sm text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                    Cancel
                    </button>
                    <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
                    <i class="fa fa-paper-plane opacity-50 me-1"></i> Send Message
                    </button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- END Compose Modal -->

    <!-- Message Modal -->
    <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                <h3 class="block-title">Welcome to our service</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="tooltip" data-placement="left" title="Reply">
                    <i class="fa fa-reply"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                    </button>
                </div>
                </div>
                <div class="block-content block-content-full bg-image text-center" style="background-image: url('assets/media/photos/photo6.jpg');">
                <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar4.jpg" alt="">
                </div>
                <div class="block-content block-content-full block-content-sm bg-body fs-sm d-flex justify-content-between align-items-center">
                <a href="javascript:void(0)">service@example.com</a>
                <span class="text-muted">2 min ago</span>
                </div>
                <div class="block-content">
                <p>Dear Customer,</p>
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                <p>Best Regards,</p>
                <p>Carol White</p>
                </div>
                <div class="block-content p-3 bg-body">
                <div class="row g-sm items-push">
                    <div class="col-sm-4">
                    <div class="options-container fx-overlay-slide-down">
                        <img class="img-fluid options-item" src="assets/media/photos/photo20.jpg" alt="">
                        <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                            <i class="fa fa-fw fa-download opacity-50"></i> Download
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="fs-sm text-muted mt-1">Travel_Pack_1.jpg</div>
                    </div>
                    <div class="col-sm-4">
                    <div class="options-container fx-overlay-slide-down">
                        <img class="img-fluid options-item" src="assets/media/photos/photo21.jpg" alt="">
                        <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                            <i class="fa fa-fw fa-download opacity-50"></i> Download
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="fs-sm text-muted mt-1">Travel_Pack_2.jpg</div>
                    </div>
                    <div class="col-sm-4">
                    <div class="options-container fx-overlay-slide-down">
                        <img class="img-fluid options-item" src="assets/media/photos/photo22.jpg" alt="">
                        <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                            <i class="fa fa-fw fa-download opacity-50"></i> Download
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="fs-sm text-muted mt-1">Travel_Pack_3.jpg</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- END Message Modal -->
</div>

@endsection

@section('script')
    <script>
        // function deleteUser(){
        //     swal({
        //         title: "Error!",``
        //         text: "Here's my error message!",
        //         type: "error",
        //         confirmButtonText: "Cool"
        //    });
        // };

        // $('.delete-user').click( function(){
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Something went wrong!',
        //         footer: '<a href="">Why do I have this issue?</a>'
        //     });
        // })

        // Swal.fire({
        //     icon: 'error',
        //     title: 'Oops...',
        //     text: 'Something went wrong!',
        //     footer: '<a href="">Why do I have this issue?</a>'
        // });
    </script>
@endsection
