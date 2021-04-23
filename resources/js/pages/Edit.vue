<template>
    <div>
        <h1>Edit</h1>
        <form @submit.prevent="handleUpdate">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" v-model="user.name" />
                <div class="error" v-if="errors.name">
                    {{ errors.name[0] }}
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" v-model="user.email" />
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
    props: ["id"],
    data() {
        return {
            user: {
                name: "",
                email: ""
            },
            errors: {}
        };
    },
    methods: {
        handleUpdate() {
            axios
                .put("/api/users/" + this.id, this.user)
                .then(response => {
                    if (response.data.status) {
                        console.log(response);

                        this.$noty.success(response.data.message);
                        this.$router.push({
                            name: "User"
                        });
                    }
                })
                .catch(error => {
                    if (error.response.status) {
                        this.errors = error.response.data.message;
                    }
                });
        },
        getUser() {
            axios.get("/api/users/" + this.id).then(response => {
                this.user = {
                    name: response.data.name,
                    email: response.data.email
                };
            });
        }
    },
    mounted() {
        this.getUser();
    }
};
</script>

<style></style>
