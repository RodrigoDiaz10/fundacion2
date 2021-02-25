import { Component, OnInit } from '@angular/core';
import { Blog } from 'src/app/models/blog';
import { BlogService } from 'src/app/services/blog.service';



@Component({
  selector: 'app-admin-blog',
  templateUrl: './admin-blog.component.html',
  styleUrls: ['./admin-blog.component.css']
})
export class AdminBlogComponent implements OnInit {
  public blogs = [];
  

  constructor(private blogService: BlogService) { }

  ngOnInit(): void {
    this.getallblog();
  }

  async getallblog(){
    //traer el bog
    this.blogs= await this.blogService.obtenerBlog();
 }




}
