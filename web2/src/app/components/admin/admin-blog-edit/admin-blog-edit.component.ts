import { catchError } from 'rxjs/operators';
import { Component, OnInit } from '@angular/core';
import { Blog } from 'src/app/models/blog';
import { BlogService } from 'src/app/services/blog.service';
import { throwError } from 'rxjs';
import { HttpErrorResponse } from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-admin-blog-edit',
  templateUrl: './admin-blog-edit.component.html',
  styleUrls: ['./admin-blog-edit.component.css']
})
export class AdminBlogEditComponent implements OnInit {
  blogModel = new Blog("", "", "", "",);
  public blog = {
    id: 0,
    
  };
  

  constructor(private blogService: BlogService, private activatedRoute: ActivatedRoute) { }

  async ngOnInit(){
    const id = this.activatedRoute.snapshot.paramMap.get("id")
    this.blog = await this.blogService.obtenerPorId(this.blog[1]);
    console.log(this.blog)

  }
//TODO
//PROBAR SI FUNCIONA CON EL ID
   async getBlog(blog){
     //traer el bog
     //await this.blogService.obtenerPorId();
     await this.blogService.obtenerPorId(blog.id);
  }

  async guardar() {
    if (!this.blogModel.title) {
      return alert("Escribe un título");
    }
    if (!this.blogModel.description) {
      return alert("Escribe la descripción");
    }
    /*if (!this.blogModel.image) {
      return alert("Escribe la descripción");
    }*/
    
    // Guardamos blog
     await this.blogService.agregarBlog(this.blogModel);

  }


}
