<template>
  <div class="feedback-container container">
    <div class="text-center">
      <span class="md-display-1 text-center">What is your rating for the subject?</span>
    </div>
    <md-card class="feedback-card" v-for="subject in subjects">
      <md-card-header>
        <md-card-content>
          <span class="md-headline">{{subject.name}}</span>
          <md-layout md-column-small>
            <md-radio v-for="rating in ratings" name="rating" :md-value="rating.value">
              <span class="md-body-1">{{rating.text}}</span>
            </md-radio>
          </md-layout>
          <md-input-container>
            <label>Any comments?</label>
            <md-textarea></md-textarea>
          </md-input-container>
        </md-card-content>
      </md-card-header>
    </md-card>
    <md-layout md-align="end">
      <md-button @click.native="submit">
        <md-icon>arrow_forward</md-icon>
        Next Question
      </md-button>
    </md-layout>
    <md-layout md-align="end">
      <span class="md-caption">Note: Once you click next there's no going back.</span>
    </md-layout>
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      subjects: [
        {
          "name": "Design of Software Systems"
        }
      ],
      ratings: [
        {
          "text": "0 - Unlikely",
          "value": 0
        },
        {
          "text": "1 - Somewhat unlikely",
          "value": 1
        },
        {
          "text": "2 - Neutral",
          "value": 2
        },
        {
          "text": "3 - Somewhat likely",
          "value": 3
        },
        {
          "text": "4 - Likely",
          "value": 4
        }
      ]
    };
  },
  methods: {
    submit: () => {
      window.location.href = '/rating';
    }
  }
}
</script>

<style scoped>
.feedback-container {
  padding-top: 50px;
}
.feedback-card {
  margin: 1rem;
}
</style>
