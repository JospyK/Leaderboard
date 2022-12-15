<!DOCTYPE html>
<html lang="fr">

<head>
    <title>
        Bar chart race
    </title>
    <meta property="og:title" content="Opensource bar chart race generator">
    <meta property="og:description"
        content="Generate your own bar chart race from a csv file thanks to this open source tool made by FabDev">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bar-chart-race/style.css')}}">
    <link rel="icon" href="/favicon.png">
</head>

<body>
    <main class="main-content" id="app">
        <section class="section">
            <div class="container">
                <h1 id="main-title" class=" text-center">Chart</h1>

                <hr>
                <div id="chart-card" class="card">
                    <div class="card-body position-relative">
                        <div class="text-right mb-4" v-if="false">
                            <button type="button" class="btn btn-xs btn-outline-primary"
                                v-on:click="startRace">Infinite</button>
                        </div>
                        <h5 class="card-title" id="graph-title">((title))</h5>
                        <div id="chartDiv" style="width:100%; height: 650px"></div>
                        <!-- <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                            v-if="interval == null">Please upload data first</p> -->
                        <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                            v-if="isLoadingDataSets">Chargement en cours ...</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/bar-chart-race/barchartrace.js')}}"></script>
    <script src="{{asset('js/bar-chart-race/datasets.js')}}"></script>
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                errors: [],
                file: null,
                isLoadingDataSets: true,
                csv_data: null,
                interval: null,
                duration: 20,
                tickDuration: 1,
                top_n: 10,
                title: "Realtime bar chart",
                fileplaceholder: "Choose file",
                realtime_data: [],
                // realtime_data: testDatasets,
                current_data_set_path: './datasets/test.csv'
            },
            mounted() {
                setTimeout(() => {
                    this.startRace({ preventDefault: () => { } })
                }, 2000);
            },
            watch: {
                realtime_data: {
                    deep: true,
                    handler(val, old) {
                        updatedDataSet(val)
                        console.log('val :>> ', this.realtime_data);
                        // if(this.interval) {this.interval.drawGraph()}
                        // else{

                        //   this.startRace({preventDefault:()=>{}})
                        // }
                    }
                }
            },
            methods: {
                fetchDataSet: function () {
                    const getRandomInt = (min, max) => {
                        min = Math.ceil(min);
                        max = Math.floor(max);
                        return Math.floor(Math.random() * (max - min + 1)) + min;
                    }
                    const updatechartdaemon = (reset) => {
                        const options = {
                            method: 'GET',

                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'Authorization': 'Bearer ${token}'
                            },

                            // body: JSON.stringify({
                            //     title: 'Un post',
                            //     content: 'Contenu de mon post'
                            // })
                        }

                        fetch('/api/race', options)
                            .then((response) => response.json())
                            .then((jsonResponse) => {
                                console.log('jsonResponse :>> ', jsonResponse);
                                //normalize response
                                const newSet = {
                                    date: getRandomInt(2000, 2010) + "-" + getRandomInt(1, 12) + "-" + getRandomInt(1, 28),
                                    user1: getRandomInt(10, 1000),
                                    user2: getRandomInt(1, getRandomInt(100, 1000)),
                                    user3: getRandomInt(1, 100),
                                    user4: getRandomInt(3, getRandomInt(10, 100)),
                                    user5: getRandomInt(50, getRandomInt(100, 1000)),
                                }

                                //   update existing datasets
                                this.realtime_data.push(newSet)


                            }).catch(err => {
                                console.log('err :>> ', err);
                            })
                        // if (!this.isAuthenticated) return;
                        // if (reset) {
                        //     timer = 0;
                        //     return;
                        // }
                        // if (timer === inactivityTimeOut / 2) {
                        //     this.showAutoLogoutWarningModal();
                        // }
                        // if (timer === inactivityTimeOut) {
                        //     this.logout();
                        //     return;
                        // }
                        setTimeout(() => {
                            // timer += 1000;
                            // console.log(timer)
                            updatechartdaemon();
                        }, 1000);
                    };
                    updatechartdaemon();

                },
                stopRace: function () {
                    if (!this.interval) {
                        return
                    } else {
                        this.interval.stop()
                    }
                },
                startRace: function (e) {
                    var self = this;
                    if (self.interval !== null) {
                        self.interval.stop()
                    }
                    if (!this.realtime_data || this.realtime_data.length ===0) {
                        this.fetchDataSet()
                        return
                    }
                    if (self.tickDuration && self.top_n) {
                        // e.preventDefault();
                        this.top_n = parseInt(self.top_n);
                        this.duration = parseInt(self.duration);
                        this.tickDuration = self.duration / self.realtime_data.length * 1000
                        let chartDiv = document.getElementById("chartDiv");
                        var data = JSON.parse(JSON.stringify(self.realtime_data))
                        self.interval = createBarChartRace(data, self.top_n, self.tickDuration);
                    }

                    //   self.errors = [];

                    //   if (!self.csv_data) {
                    //     self.errors.push('csv file is required');
                    //   }
                    //   if (!self.tickDuration) {
                    //     self.errors.push('Time between frames required.');
                    //   }
                    //   if (!self.top_n) {
                    //     self.errors.push('Number of bars to display required.');
                    //   }
                    //   e.preventDefault();
                    //   window.scrollTo({ top: $("#chart-card").offset().top - 10, behavior: 'smooth' });
                },
                checkForm: function (e) {
                    var self = this;
                    if (self.interval !== null) {
                        self.interval.stop()
                    }
                    console.log('this.csv_data :>> ', this.csv_data);
                    if (!this.csv_data) {
                        return
                    }
                    if (self.tickDuration && self.top_n) {
                        e.preventDefault();
                        this.top_n = parseInt(self.top_n);
                        this.duration = parseInt(self.duration);
                        this.tickDuration = self.duration / self.csv_data.length * 1000
                        let chartDiv = document.getElementById("chartDiv");
                        var data = JSON.parse(JSON.stringify(self.csv_data))
                        self.interval = createBarChartRace(data, self.top_n, self.tickDuration);
                    }

                    self.errors = [];

                    if (!self.csv_data) {
                        self.errors.push('csv file is required');
                    }
                    if (!self.tickDuration) {
                        self.errors.push('Time between frames required.');
                    }
                    if (!self.top_n) {
                        self.errors.push('Number of bars to display required.');
                    }
                    e.preventDefault();
                    window.scrollTo({ top: $("#chart-card").offset().top - 10, behavior: 'smooth' });
                }
            },
            delimiters: ["((", "))"]

        });


        /*
        reshapes the data from the second accepted csv format to the other :
        (one row per contender and per date) => (one row per date (ordered) and one column per contender.)
        */
        function reshapeData(data) {
            // groupby dates (first column)
            column_names = new Set(data.map(x => x[Object.keys(x)[1]]));
            const grouped_by_date = _.groupBy(data, (e) => e[Object.keys(e)[0]]);
            return Object.keys(grouped_by_date).sort().map((k) => {
                item = { 'date': k };
                column_names.forEach((n) => item[n] = 0);
                grouped_by_date[k].forEach((e) => item[e[Object.keys(e)[1]]] = e[Object.keys(e)[2]]);
                return item
            })

        }

        // settings for the example data
        const settings = {
            "covid19": {
                "duration": 30,
                "top_n": 10,
                "title": "Total cases of COVID-19 per country",
                "url": "https://raw.githubusercontent.com/FabDevGit/barchartrace/master/datasets/covid19-data.csv"
            },
            "stackoverflow": {
                "duration": 30,
                "top_n": 10,
                "title": "StackOverflow questions per language",
                "url": "https://raw.githubusercontent.com/FabDevGit/barchartrace/master/datasets/stackoverflow.csv"
            },
            "tennis": {
                "duration": 150,
                "top_n": 10,
                "title": "ATP tennis ranking",
                "url": "https://raw.githubusercontent.com/FabDevGit/barchartrace/master/datasets/tennis.csv"
            },
            "co2": {
                "duration": 30,
                "top_n": 10,
                "title": "CO2 Emissions from Fossil Fuels per capita, between 1950 and 2014 (in metric tons)",
                "url": "https://raw.githubusercontent.com/FabDevGit/barchartrace/master/datasets/co2.csv"
            }
        }


    </script>
</body>

</html>