import Vue from 'vue'
import Vuex from 'vuex'

import RolesIndex from './modules/Roles'
import RolesSingle from './modules/Roles/single'
import UsersIndex from './modules/Users'
import UsersSingle from './modules/Users/single'
import CompaniesIndex from './modules/Companies'
import CompaniesSingle from './modules/Companies/single'
import TeachersIndex from './modules/Teachers'
import TeachersSingle from './modules/Teachers/single'
import CoursesIndex from './modules/Courses'
import CoursesSingle from './modules/Courses/single'
import SubjectsIndex from './modules/Subjects'
import SubjectsSingle from './modules/Subjects/single'
import InstitutionIndex from './modules/Institution'
import InstitutionSingle from './modules/Institution/single'
import EmployeesIndex from './modules/Employees'
import EmployeesSingle from './modules/Employees/single'

import Alert from './modules/alert'
import ChangePassword from './modules/change_password'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        Alert,
        ChangePassword,
        RolesIndex,
        RolesSingle,
        UsersIndex,
        UsersSingle,
        CompaniesIndex,
        CompaniesSingle,
        TeachersIndex,
        TeachersSingle,
        CoursesIndex,
        CoursesSingle,
        SubjectsIndex,
        SubjectsSingle,
        InstitutionIndex,
        InstitutionSingle,
        EmployeesIndex,
        EmployeesSingle,
    },
    strict: debug,
})
