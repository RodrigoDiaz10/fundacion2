import { AdminBlogEditComponent } from './components/admin/admin-blog-edit/admin-blog-edit.component';
import { AdminEditComponent } from './components/admin/admin-edit/admin-edit.component';
import { BlogComponent } from './components/blog/blog.component';
import { AdminBlogComponent } from './components/admin/admin-blog/admin-blog.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { AdminComponent } from './components/admin/admin/admin.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: '/inicio', pathMatch: 'full' },
  { path: 'inicio', component: InicioComponent },
  { path: 'admin-blog', component: AdminBlogComponent },
  { path:'blog', component: BlogComponent },
  { path:'person', component: AdminEditComponent },
  { path:'blog/detail/:id', component:AdminBlogEditComponent  },
  { path:'admin', component:  AdminComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
