const KanbanBoard = () => import('./components/Kanbanboard.vue')
const AddTaskForm = () => import('./components/AddTaskForm.vue' )


export const routes = [
    {
        name: 'home',
        path: '/',
        component: KanbanBoard
    },
    {
        name: 'addtask',
        path: '/addtask',
        component: AddTaskForm
    },
  
]