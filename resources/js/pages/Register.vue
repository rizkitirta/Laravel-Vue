<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" v-model="form.name" />
                <div class="error" v-if="errors.name">
                    {{ errors.name[0] }}
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" v-model="form.email" />
                <div class="error" v-if="errors.email">
                    {{ errors.email[0] }}
                </div>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" v-model="form.password" />
                <div class="error" v-if="errors.password">
                    {{ errors.password[0] }}
                </div>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: "",
                email: "",
                password: ""
            },
            errors: {}
        };
    },
    methods: {
        handleSubmit() {
            console.log(this.form);
            axios
                .post("/api/users", this.form)
                .then(response => {
                    if (response.data.status) {
                        console.log(response);

                        this.$noty.success(response.data.message)
                        this.$router.push({
                            name: "User"
                        });
                    }
                })
                .catch(error => {
                    if (error.response.status) {
                        this.errors = error.response.data.message
                    }
                });
        }
    }
};
</script>

<style></style>
