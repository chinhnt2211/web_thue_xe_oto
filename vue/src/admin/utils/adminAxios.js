import axios from "axios";

export const adminAxios = axios.create({
    baseURL: "http://localhost:8000/api/",
    timeout: 5000,
});
