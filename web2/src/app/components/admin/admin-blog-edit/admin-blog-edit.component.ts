import { Component, OnInit } from '@angular/core';
import { Blog } from 'src/app/models/blog';
import { BlogService } from 'src/app/services/blog.service';

@Component({
  selector: 'app-admin-blog-edit',
  templateUrl: './admin-blog-edit.component.html',
  styleUrls: ['./admin-blog-edit.component.css']
})
export class AdminBlogEditComponent implements OnInit {
  blogModel = new Blog("", "", "", "",);

  constructor(private blogService: BlogService) { }

  ngOnInit(): void {

    this.getallblog();

  }

   async getallblog(){
     //traer el bog
     await this.blogService.obtenerBlog();
  }

  async guardar() {
    if (!this.blogModel.title) {
      return alert("Escribe un título");
    }
    if (!this.blogModel.description) {
      return alert("Escribe la descripción");
    }
    
    // Guardamos blog
     await this.blogService.agregarBlog(this.blogModel);
  }

}
