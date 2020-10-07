<template>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6">
                <h3 class="text-dark">Register Users</h3>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-success float-right" @click="showModal">
                    Add New User
                </button>
            </div>
        </div>
        <hr class="bg-info">
        <div class="alert alert-danger" v-if="errorMsg">
            Errors message
        </div>
        <div class="alert alert-success" v-if="successMsg">
            Success message
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center bg-secondary text-light" >
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                    <tr class="text-light">
                        <td>1</td>
                        <td>Vasyl</td>
                        <td>Vasyl@gmail.com</td>
                        <td><a href="#" class="text-info" @click="EditModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> </td>
                        <td><a href="#" class="text-danger" @click="DelModal"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <!--        {{showAddModal}}-->

        <modal1-component class="modal1" v-if="showAddModal" @closeModal="closeModal"></modal1-component>
        <modal2-component class="modal1" v-if="showEditModal" @closeEditModal="closeEditModal"></modal2-component>
        <modal3-component class="modal1" v-if="showDelModal" @closeDelModal="closeDelModal"></modal3-component>


    </div>
</template>

<script>
export default {
    data() {
        return {
            errorMsg: false,
            successMsg: false,
            showAddModal: false,
            showEditModal: false,
            showDelModal: false,
        }
    },

    methods: {
        showModal() {
            this.showAddModal = true;
        },
        closeModal(){
            this.showAddModal = false;
        },
        EditModal() {
            this.showEditModal = true;
        },
        closeEditModal(){
            this.showEditModal = false;
        },
        DelModal() {
            this.showDelModal = true;
        },
        closeDelModal(){
            this.showDelModal = false;
        }
    }
}

</script>

<style scoped>
.modal1{
    position: fixed;
    top: 20px;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0);

}
</style>
