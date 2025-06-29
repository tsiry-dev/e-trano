import axios from 'axios';

const http = axios.create({
    baseURL: import.meta.env.VITE_APP_NAME,
    headers: {
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
    },
});

// Intercepteur de requête : injecter automatiquement le token de Bearer
//à chaque requette
http.interceptors.request.use(config => {
    const user = JSON.parse();
   
      if(user?.token){
        config.headers.Authorization = `Bearer ${user.token}`
      }
    return config
});

export default http;