import './bootstrap';
import { createApp } from 'vue';
import BlogApp from './components/blog/App.vue';

const blogAppElement = document.getElementById('blog-app');

if (blogAppElement) {
    createApp(BlogApp, {
        title: blogAppElement.dataset.title ?? 'Blog',
    }).mount(blogAppElement);
}
