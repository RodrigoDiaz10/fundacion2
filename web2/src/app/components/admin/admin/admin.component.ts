import { Component, OnInit } from '@angular/core';
import { PersonService } from 'src/app/services/person.service';



export interface Person {
  name: string;
  lastname: string;
  age:number
}

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements OnInit   {

 
  constructor(private personService: PersonService) { }
ngOnInit(){
  
}


  
 
  public detalles() {/**
    this.router.navigate(["/libro/detalle", this.libro.id])*/
  }

  persons: Person[] = [
    {name: 'One',  lastname: 'lightblue', age:4},
    {name: 'Two',  lastname: 'lightgreen', age:6},
    {name: 'Three',  lastname: 'lightpink', age:5},
    {name: 'Four', lastname: '#DDBDF1', age:6},
  ];

}
