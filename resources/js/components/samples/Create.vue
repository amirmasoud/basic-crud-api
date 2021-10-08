<template>
    <div>
        <b-button id="show-btn" @click="$bvModal.show('bv-modal-example')">Create new sample</b-button>

        <b-modal id="bv-modal-example" hide-footer>
            <template #modal-title>
                Create new sample
            </template>
            <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                <b-form-group id="name" label="Name:" label-for="name">
                    <b-form-input
                        id="name"
                        v-model="form.name"
                        placeholder="Name"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group id="description" label="Description:" label-for="description">
                    <b-form-textarea
                        id="description"
                        v-model="form.description"
                        placeholder="Description"
                        required
                    ></b-form-textarea>
                </b-form-group>

                <b-form-group id="code" label="Code:" label-for="code">
                    <b-form-textarea
                        id="code"
                        v-model="form.code"
                        placeholder="Code"
                        required
                    ></b-form-textarea>
                </b-form-group>

                <b-form-group id="status" label="Status:" label-for="status">
                    <b-form-select
                        id="status"
                        v-model="form.status"
                        :options="statuses"
                        required
                    ></b-form-select>
                </b-form-group>

                <div class="mt-5">
                    <b-button type="submit" variant="primary">Submit</b-button>
                    <b-button type="reset" variant="danger">Reset</b-button>
                </div>
            </b-form>
<!--            <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Close Me</b-button>-->
        </b-modal>
    </div>
</template>

<script>
export default {
    name: "BasicSampleCreate",
    data() {
        return {
            form: {
                name: '',
                description: '',
                code: '',
                status: 1,
            },
            statuses: [{ text: 'Active', value: 'active' }, { text: 'Inactive', value: 'inactive' }],
            show: true
        }
    },
    methods: {
        onSubmit(event) {
            event.preventDefault()
            // alert(JSON.stringify(this.form))
            axios.post('/api/sample', this.form)
                .then(response => {
                    // this.isLoading = false
                    this.$emit('completed', response.data.data)
                })
                .catch(error => {
                    // handle authentication and validation errors here
                    // this.errors = error.response.data.errors
                    // this.isLoading = false
                })
        },
        onReset(event) {
            event.preventDefault()
            this.form.name = ''
            this.form.description = ''
            this.form.code = ''
            this.form.status = null
            // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    }
}
</script>

<style scoped>

</style>
