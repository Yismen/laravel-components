<template>    
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ current.name || 'Timy' }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" v-for="task in tasks" :key="task.id" @click.prevent="updateTimer(task)">
                {{ task.name }}
            </a>
        </div>
    </li>
</template>

<script>
import {ROUTES_PREFIX, CURRENT_TASK, TIMERS} from './config'

export default {
    data() {
        return {
            current: CURRENT_TASK.data,
            tasks: [],
            timers: TIMERS
        }
    },

    mounted() {
        this.fetchTasks()
    },

    methods: {
        fetchTasks() {
            axios.get(`${ROUTES_PREFIX}/timy_tasks`)
                .then(({data}) => this.tasks = data.data)
        },

        updateTimer(task) {
            this.current = task
            axios.post(`${ROUTES_PREFIX}/timy_timers`, {task_id: task.id})
                // .then(({data}) => this.tasks.push(data.data))
        }
    }
}
</script>
<style lang="scss" scopped>

</style>