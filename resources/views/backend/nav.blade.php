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
    </ul>
</nav><!--.side-menu-->