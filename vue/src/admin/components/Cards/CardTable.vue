<template>
  
</template>
<script>
import TableDropdown from "@/admin/components/Dropdowns/TableDropdown.vue";

import bootstrap from "@/admin/assets/img/bootstrap.jpg";
import angular from "@/admin/assets/img/angular.jpg";
import sketch from "@/admin/assets/img/sketch.jpg";
import react from "@/admin/assets/img/react.jpg";
import vue from "@/admin/assets/img/react.jpg";

import team1 from "@/admin/assets/img/team-1-800x800.jpg";
import team2 from "@/admin/assets/img/team-2-800x800.jpg";
import team3 from "@/admin/assets/img/team-3-800x800.jpg";
import team4 from "@/admin/assets/img/team-4-470x470.png";

export default {
  data() {
    return {
      bootstrap,
      angular,
      sketch,
      react,
      vue,
      team1,
      team2,
      team3,
      team4,
    };
  },
  components: {
    TableDropdown,
  },
  props: {
    color: {
      default: "light",
      validator: function (value) {
        // The value must match one of these strings
        return ["light", "dark"].indexOf(value) !== -1;
      },
    },
    title: String,
    data: Array,
  },
  created() {
    // console.log(Object.keys(data?.[0] || {}))
  }
};
</script>
