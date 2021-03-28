<template>
    <section class="content-wrapper" style="min-height: 960px;">
        <section class="content-header">
            <h1>Confirm</h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div>You can check the registered datas here...</div>
                    <div class="text-center">
                        <a><vue-button-spinner
                                class="btn btn-info"
                                @click.native="generateTimetable"
                                >
                            <span style="font-size: 20px;">Finally Generate whole Timetable!</span>
                        </vue-button-spinner></a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</template>


<script>

export default {
    data() {
        return {
            
        }
    },
    computed: {
        
    },
    created() {
        
    },
    destroyed() {
        
    },
    methods: {
        generateTimetable() {
            axios.post('/api/v1/generate')
            .then(() => {
                this.$router.push({ name: 'home' })
                this.$eventHub.$emit('create-success')
            })
        }
    }
}
</script>


<style scoped>
    .table-dark {
        background-color: #222d32;
        color: white;
    }
    th {
        text-align: center!important;
    }
</style>
