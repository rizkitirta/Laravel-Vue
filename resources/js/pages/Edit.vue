<template>
    <div>
        <h1>Edit</h1>
        <form @submit.prevent="handleUpdate">
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
            <button type="submit">Update</button>
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
            },
            errors: {}
        };
    },
    methods: {
        handleUpdate() {
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
