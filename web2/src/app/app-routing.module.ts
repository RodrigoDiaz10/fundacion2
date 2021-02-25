import { AdminBlogComponent } from './components/admin/admin-blog/admin-blog.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { AdminComponent } from './components/admin/admin/admin.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [
/*  { path: '', redirectTo: '/admin', pathMatch: 'full' },
  {
    path: '**',
    component: InicioComponent
},
  {
      path: 'admin-blog',
      component: AdminBlogComponent
  }*/
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
