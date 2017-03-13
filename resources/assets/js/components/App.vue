<template>
  <div class="container">
    <h2 class="text-center">Enter token to give your feedback</h2>
    <md-layout md-align="center">
      <md-card class="card">
        <md-card-content>
          <md-input-container>
            <label>Enter token to give your feedback</label>
            <md-input v-model="token"></md-input>
          </md-input-container>
          <span>{{error}}</span>
          <md-button class="md-raised md-primary button" @click.native="proceed" :disabled="loading">Proceed</md-button>
        </md-card-content>
      </md-card>
    </md-layout>
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      token: "",
      loading: false,
      shouldSubmitBeDisabled: this.loading || !this.token,
      error: ""
    };
  },
  methods: {
    proceed: () => {

      this.loading = true;

      axios.post('/api/', this.token).then(response => {
        window.location.href = "/course-selection";
      }).catch(error => {
        this.error = error.statusText;
        this.loading = false;
      });
    }

  }
}
</script>

<style scoped>
  .button {
    width: 100%;
  }
  .container {
    margin-top: 150px;
  }
  .card {
    width: 400px;
  }
</style>
