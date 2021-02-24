import { Component, OnInit } from '@angular/core';

export interface Blog {
  title: string;
  date: string;
  description:number
}

@Component({
  selector: 'app-blog',
  templateUrl: './blog.component.html',
  styleUrls: ['./blog.component.css']
})
export class BlogComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  guardar(){
    
  }

  blogs: Blog[] = [
    {title: 'One',  date: 'lightblue', description:4},
    {title: 'Two',  date: 'lightgreen', description:6},
    {title: 'Three',  date: 'lightpink', description:5},
    {title: 'Four', date: '#DDBDF1', description:6},
  ];

}
