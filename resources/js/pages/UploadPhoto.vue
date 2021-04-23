<template>
    <div>
        <h3>Upload Photo</h3>
        <img :src="previewImage" width="80" />
        <div class="form-group">
            <input type="file" name="photo" @change="upload" />
        </div>
        <button @click="submit" type="submit">Upload</button>
    </div>
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            previewImage: null,
            photo: null
        };
    },
    methods: {
        upload(e) {
            let files = e.target.files[0];
            this.previewImage = URL.createObjectURL(files);
            this.photo = files;
        },
        submit() {
            let formData = new FormData();
            formData.append("photo", this.photo);

            axios
                .post("/api/users/photo/" + this.id, formData)
                .then(response => {
                    if (response.data.status) {
                        this.$noty.success(response.data.message);
                        this.$router.push({
                            name: "Profile",
                            params: {id : this.id}
                        });
                    }
                });
        }
    }
};
</script>

<style></style>
