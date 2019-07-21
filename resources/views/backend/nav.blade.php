<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="green with-sub {{areActiveRoutes(['addProjects','addProjectsSave','listProjects'])}}">
            <span>
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl">Projects</span>
            </span>
            <ul>
                <li  class="{{isActiveRoute('addProjects')}}"><a href="{{route('addProjects')}}"><span class="lbl">Add Project</span></a></li>
                <li  class="{{isActiveRoute('listProjects')}}"><a href="{{route('listProjects')}}"><span class="lbl">Project List</span></a></li>
            </ul>
        </li>
        <li class="green with-sub">
            <span>
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl">Products</span>
            </span>
            <ul>
                <li  class="{{isActiveRoute('addProducts')}}"><a href="{{route('addProducts')}}"><span class="lbl">Add Product</span></a></li>
                <li  class="{{isActiveRoute('listProducts')}}"><a href="{{route('listProducts')}}"><span class="lbl">Product List</span></a></li>
            </ul>
        </li>
        {{--<li class="blue with-sub {{areActiveRoutes(['admin.news','admin.newsSave','admin.contacts','admin.contactsSave'])}}">--}}
	            {{--<span>--}}
	                {{--<i class="font-icon font-icon font-icon-post {{areActiveRoutes(['admin.news','admin.newsSave','admin.contacts','admin.contactsSave'])}}"></i>--}}
	                {{--<span class="lbl">Media Center</span>--}}
	            {{--</span>--}}
            {{--<ul>--}}
                {{--<li class="{{areActiveRoutes(['admin.news','admin.newsSave'])}}">--}}
                    {{--<a href="{{route('admin.news')}}"><span class="lbl">News</span></a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li class="green with-sub">
            <span>
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl">Testimonials</span>
            </span>
            <ul>
                <li  class="{{isActiveRoute('addTestimonials')}}"><a href="{{route('addTestimonials')}}"><span class="lbl">Add Testimonial</span></a></li>
                <li  class="{{isActiveRoute('listTestimonials')}}"><a href="{{route('listTestimonials')}}"><span class="lbl">Testimonial List</span></a></li>
            </ul>
        </li>
        <li class="green with-sub">
            <span>
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl">Sliders</span>
            </span>
            <ul>
                <li  class="{{isActiveRoute('addSlider')}}"><a href="{{route('addSlider')}}"><span class="lbl">Add Slider</span></a></li>
            </ul>
        </li>
        <li class="green with-sub">
            <span>
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl">About</span>
            </span>
            <ul>
                <li  class="{{isActiveRoute('addAbout')}}"><a href="{{route('addAbout')}}"><span class="lbl">Add About</span></a></li>
            </ul>
        </li>
        <li class="green with-sub">
            <span>
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl">Gallery</span>
            </span>
            <ul>
                <li  class="{{isActiveRoute('imageGallery')}}"><a href="{{route('imageGallery')}}"><span class="lbl">Uploade Images</span></a></li>
                <!-- <li  class="{{isActiveRoute('videoGallery')}}"><a href="{{route('videoGallery')}}"><span class="lbl">Upload Videos</span></a></li> -->
            </ul>
        </li>
    </ul>
</nav><!--.side-menu-->