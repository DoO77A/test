<x-dashboard.base>
    @section('content')
        <div class="page-header">

            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('dashboard') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}">Blogs</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    Show
                </li>
            </ul>
        </div>
        <div class="row justify-content-center align-items-center mb-1">
            <div class="col-md-6 ps-md-0">
                <div class="card card-pricing">
                    <div class="card-header">
                        <h4 class="card-title">Details</h4>
                    </div>
                    <div class="card-body">
                        <ul class="specification-list">
                            <li>
                                <span class="name-specification">Title</span>
                                <span class="status-specification">{{ $blog->title }}</span>
                            </li>
                            <li>
                                <span class="name-specification">Created At</span>
                                <span class="status-specification">{{ $blog->created_at }}</span>
                            </li>
                            <li>
                                <span class="name-specification">Updated At</span>
                                <span class="status-specification">{{ $blog->updated_at }}</span>
                            </li>
                            <li>
                                <span class="name-specification">Content</span>
                                <span class="status-specification">{{ $blog->content }}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard.base>
