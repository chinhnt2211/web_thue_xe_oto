import axios from "@/admin/utils/axios";

export default function login(admin) {
    axios
        .post("admin/login", admin)
        .then((rs) => console.log(rs));
}
