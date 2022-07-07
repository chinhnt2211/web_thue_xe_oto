import axios from "axios";

export const axios = axios.create({
    baseURL: "https://localhost:8000/api/",
    timeout: 1000,
});

export const adminAxios = axios.create({
    baseURL: "https://localhost:8000/api/",
    timeout: 1000,
    headers: { "Authorization": "foobar" },
});
