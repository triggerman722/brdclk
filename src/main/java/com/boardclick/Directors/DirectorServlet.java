package com.boardclick.Directors;

import com.google.gson.Gson;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Created by greg on 05/08/17.
 */

@WebServlet(value="/director")
public class DirectorServlet extends HttpServlet {
    @Override
    protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        int id = Integer.parseInt(req.getContextPath().split("/")[2]);
        DirectorRepository directorRepository = new DirectorRepository();
        Director director = directorRepository.getSingle(id);
        resp.getWriter().print(new Gson().toJson(director));
    }

    @Override
    protected void doPut(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        DirectorRepository directorRepository = new DirectorRepository();
        Director director = new Gson().fromJson(req.getReader(), Director.class);
        int id = directorRepository.addSingle(director);
        resp.getWriter().print(id);
    }
}
