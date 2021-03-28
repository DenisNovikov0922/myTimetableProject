<template>
    <section class="content-wrapper" style="min-height: 960px;">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <form @submit.prevent="submitForm">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Module</h3>
                            </div>

                            <div class="box-body">
                                <back-buttton></back-buttton>
                            </div>

                            <bootstrap-alert />

                            <div class="box-body">
                                <div class="form-group float-left">
                                    <label for="grade">Grade:</label>
                                    <input
                                            type="number"
                                            :min="1"
                                            :max="12"
                                            name="grade"
                                            :value=grade
                                            @input="updateGrade"
                                            >
                                </div>
                                <div class="form-group float-left">
                                    <label for="grade">Class:</label>
                                    <input
                                            type="number"
                                            :min="1"
                                            :max="12"
                                            name="class"
                                            :value=classNum
                                            @input="updateClass"
                                            >
                                </div>
                                <div class="form-group float-left">
                                    <label for="lessonsperday">Lessons per day:</label>
                                    <input
                                            type="number"
                                            :min="1"
                                            :max="14"
                                            name="lessonsperday"
                                            :value=lessonsperday
                                            @input="updateLessonsperday"
                                            >
                                </div>
                                <div class="form-group float-left" style="margin-top: 3px;">
                                    <label for="course">Course:</label>
                                    <v-select
                                            name="course"
                                            label="name"
                                            style="width: 250px; margin: -30px 0 0 50px;"
                                            @input="updateCourse"
                                            :value="item.course"
                                            :options="coursesAll"
                                            />
                                </div>
                                <div class="clear"></div>
                                <div class="row">
                                    <h4>Select the lessons for this class:</h4>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th v-for='index in lessonsperday' :key='index'>{{ index }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Monday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`Mo-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Tuesday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`Tu-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Wednesday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`We-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Thursday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`Th-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Friday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`Fr-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Saturday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`Sa-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Sunday
                                                </td>
                                                <td v-for='index in lessonsperday' :key='index'>
                                                    <input type="checkbox" :value="`Su-`+index" v-model="checkedLessons">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <span><strong>Checked Lessons:</strong> {{ checkedLessons }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><strong>Total Lessons:</strong> {{ this.checkedLessonsComputed.length }}</span>
                            </div><br><br>
                            <div>
                                <h4>Define the amount of lessons for this class:</h4>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Subjects</th>
                                            <th>Amount of Lessons</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <span style="display: none;">{{ i = 1 }}</span>
                                        <tr v-for='(subject, index) in subjectsAll' :key='subject.id'>
                                            <td>{{ i++ }}</td>
                                            <td>
                                                {{ subject.name }}
                                            </td>
                                            <td>
                                                <input type="number" :min="0" :max="99" :id="index" :name="subject.abbr" value="0" @input="getSum">
                                                <span 
                                                    class="btn btn-danger btn-sm"
                                                    style="border-radius: 20px; padding: 0 6px!important;"
                                                    @click="resetNum">
                                                    X
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <span>
                                <strong>Define <span style="background-color: blue; color: white; padding: 0 15px; border-radius: 10px;">{{ this.checkedLessonsComputed.length }}</span> lessons for this class. 
                                Now you defined <span style="background-color: red; color: white; padding: 0 15px; border-radius: 10px;">{{ totalSum }}</span> lessons.</strong>
                            </span>
                            <div class="box-footer text-center">
                                <a><vue-button-spinner
                                        class="btn btn-success"
                                        >
                                    Save the module for this Class
                                </vue-button-spinner></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
</template>


<script>
import { mapGetters, mapActions } from 'vuex'
var classNum = 1
var course = ""
var grade = 1
export default {
    data() {
        return {
            grade: 1,
            classNum: 1,
            course: "",
            lessonsperday: 3,
            checkedLessons: [],
            checkedSubjects: [],
            lessons_arry: [],
            totalSum: 0,
        }
    },
    computed: {
        ...mapGetters('CoursesSingle', ['item', 'loading', 'coursesAll']),
        ...mapGetters('TeachersSingle', ['item', 'loading', 'subjectsAll', 'timeoffAll']),
        checkedLessonsComputed() {
            return this.checkedLessons
        },
    },
    created() {
        this.fetchCoursesAll()
        this.fetchSubjectsAll()
    },
    destroyed() {
        this.resetState()
    },
    methods: {
        ...mapActions('CoursesSingle', ['storeData', 'resetState', 'setName', 'setCourse', 'fetchCoursesAll']),
        ...mapActions('TeachersSingle', ['storeData', 'resetState', 'setName', 'setSubject', 'setTimeoff', 'fetchSubjectsAll', 'fetchTimeoffAll']),
        updateLessonsperday(e) {
            let val = parseInt(e.target.value)
            if(val <=14 && val >=1)
                this.lessonsperday = val
        },
        updateGrade(e) {
            grade = parseInt(e.target.value)
        },
        updateClass(e) {
            classNum = parseInt(e.target.value)
        },
        updateCourse(value) {
            course = value
            this.setCourse(value)
        },
        updateSubject(value) {
            this.setSubject(value)
        },
        updateTimeoff(value) {
            this.setTimeoff(value)
        },
        getSum(e) {
        if(e.target.value == 0) {
            this.checkedSubjects.splice(e.target.id,1)
        } else {
            this.checkedSubjects[e.target.id] = e.target.name+"-"+e.target.value;
        }
        this.lessons_arry[e.target.id] = parseInt(e.target.value, 10) || 0;
        this.setTotalSum();
        },
        getSume(e) {
        this.checkedSubjects.splice(e.id,1)
        this.lessons_arry[e.id] = parseInt(e.value, 10) || 0;
        this.setTotalSum();
        },
        setTotalSum() {
            this.totalSum = this.lessons_arry.reduce((sum, val) => {
                return sum + val;
            }, 0);
        },
        resetNum: function(cb) {
            cb.target.parentElement.firstChild.value = 0
            this.getSume(cb.target.parentElement.firstChild)
        },
        submitForm() {
            let params = {}
            params['grade'] = grade
            params['classNum'] = classNum
            params['course'] = course
            params['checkedLessons'] = this.checkedLessonsComputed
            params['checkedSubjects'] = this.checkedSubjects
            if(course == "") {
                this.$swal({
                    title: 'You should select the Course!',
                    type: 'error'
                })
            }
            else if(this.checkedLessonsComputed.length == 0) {
                this.$swal({
                    title: 'You should select the Lessons!',
                    type: 'error'
                })
            } else if(this.checkedLessonsComputed.length != this.totalSum) {
                this.$swal({
                    title: 'Amount of lessons must be the same with total lessons!',
                    type: 'error'
                })
            }
            else {
                axios.post('/api/v1/session', params)
                .then(() => {
                    this.$eventHub.$emit('create-success')
                })
            }
        },
    }
}
</script>


<style scoped>
    .float-left {
        float: left;
        margin-right: 2%;
    }
    .clear {
        clear: both;
    }
    input[type=checkbox] {
        width: 20px;
        height: 20px;
    }
    input {
        border-radius: 5px!important;
        border: 1px solid darkgray;
        height: 29px;
    }
</style>
