<!DOCTYPE html>
<html lang="fr">

<head>
    <title>
        Candidats
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bar-chart-race/style.css')}}">
    <link rel="icon" href="/favicon.png">
</head>

<body >
    <div class="container-fluid">
        <div class="row" id="app">
            <div class="col-md-9">
                <main class="main-content" >
                    <section class="section">
                        <div class="container">
                            <h1 id="main-title" class="">
                                <p class="item">
                                    <select name="categorie" id="" v-model="selectedCategorie"
                                        @change="onCategorieChange">
                                        <option value="">Selectionner la catégorie</option>
                                        <option value="1">DSI INNOVANT(E)</option>
                                        <option value="2">DSI RESILIENT</option>
                                        <option value="3">LEADERSHIP FEMININ </option>
                                        <option value="4">ADMINISTRATION INTELLIGENTE</option>
                                        <option value="5">COUP DE CŒUR</option>
                                        <option value="6">ENTREPRISE DIGITALE</option>
                                        <option value="7">INDUSTRIE 4.0</option>
                                        <option value="8">LEADER DU SERVICE IT</option>
                                        <option value="9">CHAMPION DE L’EDUCATION</option>
                                        <option value="10">DEFENSEURS</option>
                                    </select>
                                </p>
                            </h1>
                            <!-- ((realtime_data)) -->

                            <div id="chart-card" class="card">
                                <div class="card-body position-relative">
                                    <h5 class="card-title" id="graph-title">((title))</h5>
                                    <div id="chartDiv" style="width:100%; height: 650px"></div>
                                    <!-- <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                                        v-if="interval == null">Please upload data first</p> -->
                                    <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                                        v-if="isLoadingDataSets && !realtime_data">Chargement en cours ...</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </main>
            </div>
            <div class="col-md-3">


                <div  class="card chart-card mini" v-for="(chart, index) in secondaryCharts"
                    :key="index">
                    <div class="card-body position-relative">
                        <h5 class="card-title" id="graph-title">((chart.title))</h5>
                        <div v-bind:id="chart.id" style="width:100%; height: 650px"></div>
                        <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                            v-if="isLoadingDataSets && !realtime_data">Chargement en cours ...</p>
                    </div>
                </div>
                <!-- <div id="chart-card" class="card">
                    <div class="card-body position-relative">
                        <h5 class="card-title" id="graph-title">((title))</h5>
                        <div id="vjuryChart" style="width:100%; height: 650px"></div>
                        <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                            v-if="isLoadingDataSets && !realtime_data">Chargement en cours ...</p>
                    </div>
                </div>
                <div id="chart-card" class="card">
                    <div class="card-body position-relative">
                        <h5 class="card-title" id="graph-title">((title))</h5>
                        <div id="vpublicChart" style="width:100%; height: 650px"></div>
                        <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                            v-if="isLoadingDataSets && !realtime_data">Chargement en cours ...</p>
                    </div>
                </div> -->


            </div>
        </div>
    </div>


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
                duration: 1,
                tickDuration: 1,
                fetchdaemon_interval: 3000,
                top_n: 10,
                title: "Candidats",
                fileplaceholder: "Choose file",
                realtime_data: null,
                daemonTimer: null,
                previousJsonResponse: {},
                max_duplicate_set: 3,
                duplicate_set_count: 0,
                selectedCategorie: '',
                secondaryCharts: [
                    {
                        id: "vproChart",
                        title: "vpro"
                    },
                    {
                        id: "vjuryChart",
                        title: "vjuryChart"
                    },
                    {
                        id: "vpublicChart",
                        title: "vpublicChart"
                    },
                ]

            },
            mounted() {
                let params = (new URL(document.location)).searchParams;
                this.selectedCategorie = params.get("categorie");
                // setTimeout(() => {
                this.startRace({ preventDefault: () => { } })
                // }, 2000);
            },
            watch: {
                realtime_data: {
                    deep: true,
                    handler(val, old) {
                        updatedDataSet(val)
                    }
                },

            },
            methods: {
                fetchDataSet: function () {
                    this.isLoadingDataSets = true;
                    clearTimeout(this.daemonTimer)
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
                            },

                        }

                        const raceEndpoint = '/api/race?categorie=' + this.selectedCategorie

                        fetch(raceEndpoint, options)
                            .then((response) => response.json())
                            .then((jsonResponse) => {
                                const isSameAsPreviousSet = _.isEqual(this.previousJsonResponse, jsonResponse)
                                this.duplicate_set_count = isSameAsPreviousSet ? this.duplicate_set_count + 1 : 0
                                if (this.duplicate_set_count > this.max_duplicate_set) {
                                    this.isLoadingDataSets = false;
                                    return
                                }
                                this.previousJsonResponse = jsonResponse
                                // console.log(isSameAsPreviousSet, this.max_duplicate_set, this.duplicate_set_count);

                                //normalize response
                                const setSample = {
                                    date: getRandomInt(2000, 2010) + "-" + getRandomInt(1, 12) + "-" + getRandomInt(1, 28),
                                    user1: getRandomInt(10, 1000),
                                    user2: getRandomInt(1, getRandomInt(100, 1000)),
                                    user3: getRandomInt(1, 100),
                                    user4: getRandomInt(3, getRandomInt(10, 100)),
                                    user5: getRandomInt(50, getRandomInt(100, 1000)),
                                }
                                const newSet = {
                                    date: getRandomInt(2000, 2010) + "-" + getRandomInt(1, 12) + "-" + getRandomInt(1, 28),
                                    ...jsonResponse
                                }

                                //   update existing datasets
                                this.realtime_data = [...(this.realtime_data || []), (newSet)]

                                if (this.interval === null) { this.startRace() }


                            }).catch(err => {
                                this.isLoadingDataSets = false;
                                // console.log('err :>> ', err);
                            })

                        this.daemonTimer = setTimeout(() => {
                            updatechartdaemon();
                        }, this.fetchdaemon_interval);
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
                    if (!this.realtime_data || this.realtime_data.length === 0) {
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
                        self.interval = createBarChartRace(data, self.top_n, self.tickDuration, 'vproChart');
                        self.interval = createBarChartRace(data, self.top_n, self.tickDuration, 'vjuryChart');
                        self.interval = createBarChartRace(data, self.top_n, self.tickDuration, 'vpublicChart');
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
                onCategorieChange: function () {
                    window.location.href = window.location.origin + window.location.pathname + '?categorie=' + this.selectedCategorie
                },
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