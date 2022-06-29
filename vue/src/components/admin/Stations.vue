<template>
  <div>
    <h1>Stations</h1>
    <table class="table-auto" width="100%">
      <thead>
        <tr>
          <td>id</td>
          <td>name</td>
          <td>address</td>
          <td>phone number</td>
          <td>capacity</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="station in stations" :key="station.id">
          <td>{{ station.id }}</td>
          <td>{{ station.name }}</td>
          <td>{{ station.address }}</td>
          <td>{{ station.phone_number }}</td>
          <td>{{ station.capacity }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      stations: []
    };
  },
  mounted() {
    fetch("http://localhost:8000/api/stations")
      .then(rs => rs.json())
      .then(data => (this.stations = data))
      .catch(err => console.log(err));
  }
};
</script>