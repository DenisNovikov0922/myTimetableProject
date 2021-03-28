function initialState() {
    return {
        item: {
            id: null,
            name: null,
            subject: null,
            timeoff: null,
        },
        subjectsAll: [],
        timeoffAll: [],
        loading: false,
    }
}

const getters = {
    item: state => state.item,
    loading: state => state.loading,
    subjectsAll: state => state.subjectsAll,
    timeoffAll: state => state.timeoffAll,
}

const actions = {
    storeData({ commit, state, dispatch }) {
        commit('setLoading', true)
        dispatch('Alert/resetState', null, { root: true })

        return new Promise((resolve, reject) => {
            let params = _.cloneDeep(state.item)
            

            axios.post('/api/v1/teachers', params)
                .then(response => {
                    commit('resetState')
                    resolve()
                })
                .catch(error => {
                    let message = error.response.data.message || error.message
                    let errors  = error.response.data.errors

                    dispatch(
                        'Alert/setAlert',
                        { message: message, errors: errors, color: 'danger' },
                        { root: true })

                    reject(error)
                })
                .finally(() => {
                    commit('setLoading', false)
                })
        })
    },
    updateData({ commit, state, dispatch }) {
        commit('setLoading', true)
        dispatch('Alert/resetState', null, { root: true })

        return new Promise((resolve, reject) => {
            let params = _.cloneDeep(state.item)
            

            axios.put('/api/v1/teachers/' + params.id, params)
                .then(response => {
                    commit('setItem', response.data.data)
                    resolve()
                })
                .catch(error => {
                    let message = error.response.data.message || error.message
                    let errors  = error.response.data.errors

                    dispatch(
                        'Alert/setAlert',
                        { message: message, errors: errors, color: 'danger' },
                        { root: true })

                    reject(error)
                })
                .finally(() => {
                    commit('setLoading', false)
                })
        })
    },
    fetchData({ commit, dispatch }, id) {
        axios.get('/api/v1/teachers/' + id)
            .then(response => {
                commit('setItem', response.data.data)
            })
        dispatch('fetchTimeoffAll')    
        dispatch('fetchSubjectsAll')
        
    },
    fetchSubjectsAll({ commit }) {
        axios.get('/api/v1/subjects')
            .then(response => {
                commit('setSubjectsAll', response.data.data)
            })
    },
    fetchTimeoffAll({ commit }) {
        // axios.get('/api/v1/timeoff')
        //     .then(response => {
        //         commit('setTimeoffAll', response.data.data)
        //     })
    },
    
    setName({ commit }, value) {
        commit('setName', value)
    },
    setSubject({ commit }, value) {
        commit('setSubject', value)
    },
    setTimeoff({ commit }, value) {
        commit('setTimeoff', value)
    },
    resetState({ commit }) {
        commit('resetState')
    }
}

const mutations = {
    setItem(state, item) {
        state.item = item
    },
    setName(state, value) {
        state.item.name = value
    },
    setSubject(state, value) {
        state.item.subject = value
    },
    setTimeoff(state, value) {
        state.item.timeoff = value
    },
    setSubjectsAll(state, value) {
        state.subjectsAll = value
    },
    setTimeoffAll(state, value) {
        state.timeoffAll = value
    },
    setLoading(state, loading) {
        state.loading = loading
    },
    resetState(state) {
        state = Object.assign(state, initialState())
    }
}

export default {
    namespaced: true,
    state: initialState,
    getters,
    actions,
    mutations
}
