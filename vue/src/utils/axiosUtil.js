import axios from "axios";

// 
let BASE_URL = "http://localhost:8000/api";


export const baseAxios = axios.create({
    baseURL: BASE_URL + "/",
    timeout: 5000,
});
export const adminAxios = axios.create({
    baseURL: BASE_URL + "/admin",
    timeout: 5000,
});
export const userAxios = axios.create({
    baseURL: BASE_URL+"/user",
    timeout: 5000,
});
