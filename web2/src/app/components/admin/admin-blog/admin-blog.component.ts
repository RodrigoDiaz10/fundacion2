import { Component, Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Blog } from 'src/app/models/blog';
import { BlogService } from 'src/app/services/blog.service';



@Component({
  selector: 'app-admin-blog',
  templateUrl: './admin-blog.component.html',
  styleUrls: ['./admin-blog.component.css']
})
export class AdminBlogComponent implements OnInit {
  @Input() blogs: any;
  public blog=[];
  public va;
  

  constructor(private blogService: BlogService, private router: Router) { }

  ngOnInit(): void {
    this.getallblog();
    //console.log(this.blog);
  } 

  async getallblog(){
    //this.blogs=JSON.parse(await this.blogService.obtenerBlog())
    //traer el bog arreglar lo que traigo y lo que muestro
    this.blog.push(await this.blogService.obtenerBlog());
  
    this.va ++;
    //this.blog= await this.blogService.obtenerBlog();
    console.log(this.blog[1].id) 
  }

  public detalles() {
    //this.router.navigate(["/blog/detail", this.blogs.id])
    console.log(this.blog[1].id)
  }
  
 
 




}
