import { Person } from './../components/admin/admin/admin.component';
import { Injectable } from '@angular/core';
import { HttpService } from './http.service';

@Injectable({
  providedIn: 'root'
})
export class PersonService {

  constructor(private http: HttpService) { }

  public async eliminarPerson(idPerson) {
    return await this.http.delete("/api/person?id=".concat(idPerson));
  }

  public async agregarPerson(person: Person) {
    return await this.http.post("/api/person", person);
  }

  public async obtenerPerson() {
    return await this.http.get("/api/person");
  }

  public async modificarPerson(person: Person) {
    return await this.http.update("/api/person",person);
  }
  //TODO
  //AGREGAR  EL UPDATE
}
