<div class="leftside-menu">
    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{route('admin.home')}}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{route('admin.home')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                    <i class="ri-survey-line"></i>
                    <span> Project </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('projects.index')}}">Project List</a>
                        </li>
                        <li>
                            <a href="{{route('activities.index')}}">Activities List</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#productForms" aria-expanded="false" aria-controls="productForms" class="side-nav-link">
                    <i class="ri-survey-line"></i>
                    <span> Product </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="productForms">
                    <ul class="side-nav-second-level">
                        <li>
                            {{-- <a href="{{route('categories.index')}}">Category List</a> --}}
                        </li>
                        <li>
                            <a href="{{route('products.index')}}">Product List</a>
                        </li>
                        <li>
                            <a href="{{route('product-details.index')}}">Details List</a>
                        </li>


                    </ul>
                </div>
            </li>
            {{-- <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#serviceForms" aria-expanded="false" aria-controls="serviceForms" class="side-nav-link">
                    <i class="ri-survey-line"></i>
                    <span> Service </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="serviceForms">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('services.index')}}">Service List</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-group-2-line"></i>
                    <span> Contact Us </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            {{-- --}}
                            {{-- --}}
                            {{-- --}}
                            <a href="{{route('contactuses.index')}}">List</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#galleryForms" aria-expanded="false" aria-controls="galleryForms" class="side-nav-link">
                    <i class="ri-survey-line"></i>
                    <span> Gallery </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="galleryForms">
                    <ul class="side-nav-second-level">
                        <li>
                            {{-- <a href="{{route('categories.index')}}">Category List</a> --}}
                        </li>
                        <li>
                            <a href="{{route('gallery-categories.index')}}">Category List</a>
                        </li>
                        <li>
                            <a href="{{route('galleries.index')}}">Gallery List</a>
                        </li>


                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span class="badge bg-warning float-end">New</span>
                    <span> Testimonials </span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('testimonials.index')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('testimonials.create')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#subscriptionLayouts" aria-expanded="false" aria-controls="subscriptionLayouts" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> Subscriptions </span>
                </a>
                <div class="collapse" id="subscriptionLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('subscriptions.index')}}">List</a>
                        </li>


                    </ul>
                </div>
            </li>
              <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#downloadLayouts" aria-expanded="false" aria-controls="downloadLayouts" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> Downloads </span>
                </a>
                <div class="collapse" id="downloadLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('download-categories.index')}}">Category List</a>
                        </li>
                         <li>
                            <a href="{{route('downloads.index')}}">Download List</a>
                        </li>


                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
