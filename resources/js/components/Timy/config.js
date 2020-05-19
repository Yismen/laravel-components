export const API = 'https://localhost:8000'

export const ROUTES_PREFIX = ""

export const DEFAULT = 1

export let TIMERS = []

export let CURRENT_TASK = {  
    data: {},  
    set(data) {
        this.data = data
    }
}