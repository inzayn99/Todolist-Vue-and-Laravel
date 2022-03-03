<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Vue TodoList</b></div>

                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" placeholder="Todo.." class="form-control" aria-label="todo"
                                   aria-describedby="todo">
                            <button type="button" class="btn btn-info">Add</button>
                        </div>
                    </div>
                    {{ todos }}
                    <table class="table table-bordered mt-1">
                        <thead>
                        <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr v-for="(todo,index) in todos" :key="index">
                            <td>{{index}}</td>
                            <td>{{todo.name}}</td>
                            <td>Delete</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            todos: [],
            api: 'http://127.0.0.1:8000/api/todos'
        }
    },
    mounted() {
        // get api data
        this.axios.get(this.api).then(res => {
            this.todos = res.data;
        })
    }
}
</script>
