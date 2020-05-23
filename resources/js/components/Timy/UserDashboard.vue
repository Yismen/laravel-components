<template>
    <div class="__dashboard">
        <div class="loading" v-if="loading">Loading...</div>
        <div class="" v-else>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
                    <Infobox title="8.25" description="Hours Today" />
                </div>
                <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
                    <Infobox title="8.25" description="Previous Date" />
                </div>
                
                <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
                    <Infobox title="8.25" description="This Payroll" />
                </div>
                
                <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
                    <Infobox title="8.25" description="Last Payroll" />
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                   <TimersByPayroll />
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <TimersTable /> 
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Infobox from './partials/_Infobox'
import TimersTable from './partials/_UserTimersTable'
import TimersByPayroll from './partials/_UserTimersByPayrolls'

export default {
    data() {
        return {
            loading: true
        }
    },

    mounted() {
        /**
         * Set up a timeout to give the Dropdown component the time to render and create a new timer. 
         * Trying to ensure the last timer is also fetched by the UserTimesTable component. 
         */
        setTimeout(() => this.loading = false, 3000)
    },

    components: {Infobox, TimersTable, TimersByPayroll}
}
</script>

<style scoped>
    .loading{
        height: 70vh;
        font-size: xxx-large;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>