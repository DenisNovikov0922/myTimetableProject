import Vue from 'vue'
import VueRouter from 'vue-router'

import ChangePassword from '../components/ChangePassword.vue'
import RolesIndex from '../components/cruds/Roles/Index.vue'
import RolesCreate from '../components/cruds/Roles/Create.vue'
import RolesShow from '../components/cruds/Roles/Show.vue'
import RolesEdit from '../components/cruds/Roles/Edit.vue'
import UsersIndex from '../components/cruds/Users/Index.vue'
import UsersCreate from '../components/cruds/Users/Create.vue'
import UsersShow from '../components/cruds/Users/Show.vue'
import UsersEdit from '../components/cruds/Users/Edit.vue'
import CompaniesIndex from '../components/cruds/Companies/Index.vue'
import CompaniesCreate from '../components/cruds/Companies/Create.vue'
import CompaniesShow from '../components/cruds/Companies/Show.vue'
import CompaniesEdit from '../components/cruds/Companies/Edit.vue'
import TeachersIndex from '../components/cruds/Teachers/Index.vue'
import TeachersCreate from '../components/cruds/Teachers/Create.vue'
import TeachersShow from '../components/cruds/Teachers/Show.vue'
import TeachersEdit from '../components/cruds/Teachers/Edit.vue'
import CoursesIndex from '../components/cruds/Courses/Index.vue'
import CoursesCreate from '../components/cruds/Courses/Create.vue'
import CoursesShow from '../components/cruds/Courses/Show.vue'
import CoursesEdit from '../components/cruds/Courses/Edit.vue'
import SubjectsIndex from '../components/cruds/Subjects/Index.vue'
import SubjectsCreate from '../components/cruds/Subjects/Create.vue'
import SubjectsShow from '../components/cruds/Subjects/Show.vue'
import SubjectsEdit from '../components/cruds/Subjects/Edit.vue'
import InstitutionIndex from '../components/cruds/Institution/Index.vue'
import InstitutionCreate from '../components/cruds/Institution/Create.vue'
import InstitutionShow from '../components/cruds/Institution/Show.vue'
import InstitutionEdit from '../components/cruds/Institution/Edit.vue'
import EmployeesIndex from '../components/cruds/Employees/Index.vue'
import EmployeesCreate from '../components/cruds/Employees/Create.vue'
import EmployeesShow from '../components/cruds/Employees/Show.vue'
import EmployeesEdit from '../components/cruds/Employees/Edit.vue'

import Session from '../components/Session'
import Home from '../components/Home'
import CreateTimetable from '../components/CreateTimetable'
import StepbyStep from '../components/StepbyStep'
import Faq from '../components/Faq'
import Termsofservice from '../components/Termsofservice'
import Paynow from '../components/Paynow'

Vue.use(VueRouter)

const routes = [
    { path: '/change-password', component: ChangePassword, name: 'auth.change_password' },
    { path: '/roles', component: RolesIndex, name: 'roles.index' },
    { path: '/roles/create', component: RolesCreate, name: 'roles.create' },
    { path: '/roles/:id', component: RolesShow, name: 'roles.show' },
    { path: '/roles/:id/edit', component: RolesEdit, name: 'roles.edit' },
    { path: '/users', component: UsersIndex, name: 'users.index' },
    { path: '/users/create', component: UsersCreate, name: 'users.create' },
    { path: '/users/:id', component: UsersShow, name: 'users.show' },
    { path: '/users/:id/edit', component: UsersEdit, name: 'users.edit' },
    { path: '/companies', component: CompaniesIndex, name: 'companies.index' },
    { path: '/companies/create', component: CompaniesCreate, name: 'companies.create' },
    { path: '/companies/:id', component: CompaniesShow, name: 'companies.show' },
    { path: '/companies/:id/edit', component: CompaniesEdit, name: 'companies.edit' },
    { path: '/teachers', component: TeachersIndex, name: 'teachers.index' },
    { path: '/teachers/create', component: TeachersCreate, name: 'teachers.create' },
    { path: '/teachers/:id', component: TeachersShow, name: 'teachers.show' },
    { path: '/teachers/:id/edit', component: TeachersEdit, name: 'teachers.edit' },
    { path: '/courses', component: CoursesIndex, name: 'courses.index' },
    { path: '/courses/create', component: CoursesCreate, name: 'courses.create' },
    { path: '/courses/:id', component: CoursesShow, name: 'courses.show' },
    { path: '/courses/:id/edit', component: CoursesEdit, name: 'courses.edit' },
    { path: '/subjects', component: SubjectsIndex, name: 'subjects.index' },
    { path: '/subjects/create', component: SubjectsCreate, name: 'subjects.create' },
    { path: '/subjects/:id', component: SubjectsShow, name: 'subjects.show' },
    { path: '/subjects/:id/edit', component: SubjectsEdit, name: 'subjects.edit' },
    { path: '/institution', component: InstitutionIndex, name: 'institution.index' },
    { path: '/institution/create', component: InstitutionCreate, name: 'institution.create' },
    { path: '/institution/:id', component: InstitutionShow, name: 'institution.show' },
    { path: '/institution/:id/edit', component: InstitutionEdit, name: 'institution.edit' },
    { path: '/employees', component: EmployeesIndex, name: 'employees.index' },
    { path: '/employees/create', component: EmployeesCreate, name: 'employees.create' },
    { path: '/employees/:id', component: EmployeesShow, name: 'employees.show' },
    { path: '/employees/:id/edit', component: EmployeesEdit, name: 'employees.edit' },

    { path: '/session', component: Session, name: 'session' },
    { path: '/home', component: Home, name: 'home' },
    { path: '/createtimetable', component: CreateTimetable, name: 'createtimetable' },
    { path: '/stepbystep', component: StepbyStep, name: 'stepbystep' },
    { path: '/faq', component: Faq, name: 'faq' },
    { path: '/termsofservice', component: Termsofservice, name: 'termsofservice' },
    { path: '/paynow', component: Paynow, name: 'paynow' },
]

export default new VueRouter({
    mode: 'history',
    base: '/admin',
    routes
})
