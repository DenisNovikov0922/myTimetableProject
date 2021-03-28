@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li>
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Generated Timetables</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Help</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <router-link :to="{ name: 'stepbystep' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Step by Step
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'faq' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                FAQ
                            </span>
                        </router-link>
                    </li>
                
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Institution</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <router-link :to="{ name: 'institution.index' }">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Info
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'users.index' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Responsible
                            </span>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Create Timetable</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <router-link :to="{ name: 'courses.index' }">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Courses
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'subjects.index' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Subjects
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'teachers.index' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Teachers
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'session' }">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Module
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'createtimetable' }">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Create
                            </span>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Payments</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <router-link :to="{ name: 'termsofservice' }">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Terms of Service
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'paynow' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Pay Now
                            </span>
                        </router-link>
                    </li>
                
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <router-link :to="{ name: 'roles.index' }">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'users.index' }">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </router-link>
                    </li>
                
                </ul>
            </li>
            <!-- <li>
                <router-link :to="{ name: 'companies.index' }">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.companies.title')</span>
                </router-link>
            </li><li>
                <router-link :to="{ name: 'employees.index' }">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.employees.title')</span>
                </router-link>
            </li> -->

            <li>
                <router-link :to="{ name: 'auth.change_password' }">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </router-link>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

