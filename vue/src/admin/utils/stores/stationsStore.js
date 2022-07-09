import axios from "axios";
import { defineStore } from "pinia";

export const useStationsStore = defineStore("stationsStore", {
    state: () => {
        return {
            stations: [],
            currentStation: null,
        };
    },
    getters: {
        station(state) {
            return state.currentStation;
        }
    },
    actions: {
        async fetchStations(page = null) {
            console.log(page)
            await axios
                .get(`http://localhost:8000/api/stations/get`, {
                    page
                })
                .then(response => response.data.data)
                .then(data => {
                    console.log(data)
                    this.stations = data;
                })
                .catch((error) => console.log(error));
        },
        async fetchStation(id = null) {
            // console.log(id)
            await axios
                .get(`http://localhost:8000/api/stations/get`, {
                    params: {
                        id
                    }
                })
                .then(response => response.data)
                .then(data => {
                    console.log(data)
                    this.currentStation = data;
                })
                .catch((error) => console.log(error));

            this.currentId = id;
        },
        create(station) {
            console.log(station)
        }
    },
});
