import { Person } from './../../../models/person';
import { Component, OnInit } from '@angular/core';
import { PersonService } from 'src/app/services/person.service';

@Component({
  selector: 'app-admin-edit',
  templateUrl: './admin-edit.component.html',
  styleUrls: ['./admin-edit.component.css']
})
export class AdminEditComponent implements OnInit {
  personModel = new Person("", "","","","","","","","");

   seleccionado: number;//TODO ARREGAR ESO

  constructor(private personService: PersonService) {
     
    this.getPerson(this.personModel);
  }
  

  ngOnInit(): void {
    
  }

  async getPerson(person){
    //traer el bog
    //await this.blogService.obtenerPorId();
    await this.personService.obtenerPorId(person.id);
 }

  async guardar() {
    /*if (!this.personModel.name) {
      return alert("Escribe un título");
    }
    if (!this.personModel.lastaname) {
      return alert("Escribe la descripción");
    }
    if (!this.blogModel.image) {
      return alert("Escribe la descripción");
    }*/
    
    // Guardamos blog
     await this.personService.agregarPerson(this.personModel);

  }

}
