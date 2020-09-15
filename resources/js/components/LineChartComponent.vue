<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button @click="update" class="btn btn-primary btn-sm">Update</button>
                    </div>
                    <div class="card-body">
                        <line-chart :chart-data="data" :height="120" :options="{ responsive: true, maintainAspectRatio: true }"></line-chart>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'

    export default {
        components: {
            LineChart
        },
        data: function () {
            return {
                data: [],
            }
        },
        methods: {
            update: function () {
                axios.get('./api/line_chart')
            },
        },
        mounted() {
            // this.update()
            window.Echo.channel('laravel_database_line_chart_channel').listen('LineChartEvent', (response) => {
                this.data = response.data
                console.log(response)
            })
        },
    }
</script>
