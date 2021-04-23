<template>
  <div>
      <h1>Register</h1>
      <form @submit.prevent="handleSubmit">
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" v-model="form.name">
          </div>
          <div class="form-group">
              <label for="">Email</label>
              <input type="email" v-model="form.email">
          </div>
          <div class="form-group">
              <label for="">Password</label>
              <input type="password" v-model="form.password">
          </div>
          <button type="submit">Register</button>
      </form>
  </div>
</template>

<script>
export default {
    data() {
        return{
            form: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    methods: {
        handleSubmit(){
            console.log(this.form);
            axios.post('/api/users', this.form).then((response)=> {
                console.log(response)
                this.$router.push({
                    name: 'User',
                })
            }).catch((error) => {
                console.log(error)
            })
        }
    }
}
</script>

<style>

</style>
