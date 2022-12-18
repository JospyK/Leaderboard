<!DOCTYPE html>
<html lang="fr">

<head>
    <title>
        DSI Awards 2022
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bar-chart-race/style.css')}}">

    <link rel="icon" href="/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

</head>
<style>
    .chart-card .chart{
        height: 30vh;
    }
    .chart-card .card-body{
        /* margin-right: 100px; */
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row" id="app">
            <div class="col-md-7">
                <main class="main-content">
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 id="main-title" class="">
                                        <p class="text-primary">
                                            <img src="/partenaires/7.jpg" width="50px" alt="">
                                            <img src="/partenaires/9.jpg" width="50px" alt="">
                                            DSI Awards 2022</p></h3>
                                </div>
                                <div class="col-md-6">
                                    <p class="item">
                                        <select name="categorie" class="form-control" id="" v-model="selectedCategorie"
                                            @change="onCategorieChange">
                                            <option value="" selected>Selectionner la catégorie</option>
                                            @foreach(App\Models\Candidat::CATEGORIE_RADIO as $key => $label)
                                                <option value="{{ $key }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <h3 id="main-title" class="">


                            </h3>
                            <!-- ((realtime_data)) -->

                            <div id="chart-card" class="card chart-card">
                                <div class="card-body position-relative ctn">
                                    <h6 class="card-title" id="graph-title">((title))</h6>
                                    <div id="totalChart" style="width:100%; height: 600px" class="chart main"></div>
                                    <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                                        v-if="isLoadingDataSets && !realtime_data">Chargement en cours ...</p>
                                </div>
                            </div>
                            <div class="text-center py-3" v-if="selectedCategorie">
                                 <a @click="loadWinnerPage" class="text-white btn btn-success btn-large my5 mx-auto text-center">THE WINNER</a>
                            </div>
                        </div>
                    </section>

                </main>
            </div>
            <div class="col-md-5">


                <div class="card chart-card mini" v-for="(chart, index) in secondaryCharts" :key="index">
                    <div class="card-body position-relative">
                        <h5 class="card-title" id="graph-title">((chart.title))</h5>
                        <div v-bind:id="chart.id+'Chart'" class="chart"></div>
                        <p style="position:absolute;top:50%;left:50%;font-size:1.125rem;transform: translate(-50%,-50%)"
                            v-if="isLoadingDataSets">Chargement en cours ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="mt-5 partenaires center text-center flex">
        <h1>Merci à tous nos partenaires</h1>
        <img src="/partenaires/1.jpg" width="150px" alt="">
        <img src="/partenaires/3.jpg" width="150px" alt="">
        <img src="/partenaires/4.jpg" width="150px" alt="">
        <img src="/partenaires/5.jpg" width="150px" alt="">
        <img src="/partenaires/6.jpg" width="150px" alt="">
        <img src="/partenaires/7.jpg" width="150px" alt="">
        <img src="/partenaires/8.jpg" width="150px" alt="">
        <img src="/partenaires/9.jpg" width="150px" alt="">
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
                isLoadingDataSets: false,
                csv_data: null,
                interval: null,
                intervalList: {
                    total: null,
                    vpro: null,
                    vjury: null,
                    vpublic: null,
                },
                duration: 1,
                tickDuration:1000,
                fetchdaemon_interval: 3000,
                top_n: 10,
                title: "Classement",
                fileplaceholder: "Choose file",
                realtime_data: null,
                datasets: {
                    total: null,
                    vpro: null,
                    vjury: null,
                    vpublic: null,
                },
                daemonTimer: null,
                previousJsonResponse: {},
                max_duplicate_set: 3,
                duplicate_set_count: {},
                selectedCategorie: '',
                secondaryCharts: [
                    {
                        id: "vpro",
                        title: "Professionnel"
                    },
                    {
                        id: "vjury",
                        title: "Jury"
                    },
                    {
                        id: "vpublic",
                        title: "Public"
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

            },
            methods: {
                fetchDataSet: function () {
                    if (this.isLoadingDataSets) {
                        return
                    }
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

                        const raceEndpoint = '/api/race?categorie=' + (this.selectedCategorie || '')

                        fetch(raceEndpoint, options)
                            .then((response) => response.json())
                            .then((jsonResponse) => {
                                const { total, vpro, vjury } = jsonResponse


                                Object.keys(jsonResponse).forEach(key => {

                                    const isSameAsPreviousSet = _.isEqual((this.previousJsonResponse[key] || {}), jsonResponse[key])

                                    // console.log('isSameAsPreviousSet :>> ', isSameAsPreviousSet);
                                    this.duplicate_set_count[key] = isSameAsPreviousSet ? (this.duplicate_set_count[key] || 0) + 1 : 0
                                    if (this.duplicate_set_count[key] <= this.max_duplicate_set) {
                                        jsonResponse[key] = {
                                            date: getRandomInt(2000, 2010) + "-" + getRandomInt(1, 12) + "-" + getRandomInt(1, 28),
                                            // user1: getRandomInt(10, 1000),
                                            // user2: getRandomInt(1, getRandomInt(100, 1000)),
                                            // user3: getRandomInt(1, 100),
                                            // user4: getRandomInt(3, getRandomInt(10, 100)),
                                            // user5: getRandomInt(50, getRandomInt(100, 1000)),
                                            ...jsonResponse[key]
                                        }
                                        this.previousJsonResponse[key] = jsonResponse[key]
                                        this.datasets[key] = [...(this.datasets[key] || []), (jsonResponse[key])]
                                        updatedDataSet(this.datasets[key], key)

                                    }

                                    if (this.intervalList[key] === null) { this.startRace() }

                                });


                                this.isLoadingDataSets = false;
                                // console.log(jsonResponse);

                                // //normalize response
                                // const setSample = {
                                //     date: getRandomInt(2000, 2010) + "-" + getRandomInt(1, 12) + "-" + getRandomInt(1, 28),
                                //     user1: getRandomInt(10, 1000),
                                //     user2: getRandomInt(1, getRandomInt(100, 1000)),
                                //     user3: getRandomInt(1, 100),
                                //     user4: getRandomInt(3, getRandomInt(10, 100)),
                                //     user5: getRandomInt(50, getRandomInt(100, 1000)),
                                // }
                                // const newSet = {
                                //     date: getRandomInt(2000, 2010) + "-" + getRandomInt(1, 12) + "-" + getRandomInt(1, 28),
                                //     ...total
                                // }

                                // //   update existing datasets
                                // this.realtime_data = [...(this.realtime_data || []), (newSet)]



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
                    if (Object.keys(this.datasets).some(e => this.datasets[e] === null)) {
                        this.fetchDataSet()
                        return
                    }
                    if (self.tickDuration && self.top_n) {
                        // e.preventDefault();
                        this.top_n = parseInt(self.top_n);
                        this.duration = parseInt(self.duration);
                        // this.tickDuration = self.duration / self.realtime_data.length * 1000
                        // let chartDiv = document.getElementById("chartDiv");
                        // var data = JSON.parse(JSON.stringify(self.realtime_data))
                        // self.interval = createBarChartRace(data, self.top_n, self.tickDuration, {});

                        ['vpro', 'vjury', 'vpublic', 'total'].forEach(item => {
                            const opts = {
                                htmlEl: item + 'Chart',
                                datasetKey: item,
                                margin: {
                                    right: item ==='total' ? 100 : 80
                                }
                            }
                            self.intervalList[item] = createBarChartRace(this.datasets[item], self.top_n, self.tickDuration, opts);
                        });
                        // self.intervalList['vjury'] = createBarChartRace(data, self.top_n, self.tickDuration, 'vjuryChart');
                        // self.intervalList['vpublic'] = createBarChartRace(data, self.top_n, self.tickDuration, 'vpublicChart');
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
                loadWinnerPage: function () {
                    window.location.href = window.location.origin + '/classement/' + this.selectedCategorie
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
