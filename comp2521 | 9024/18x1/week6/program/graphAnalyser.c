#include <stdlib.h>
#include <stdio.h>
#include <assert.h>
#include <string.h>
#include "Graph.h"
int main()
{
    int nV;
    Vertex v, w;
    char ver[100];
    Edge e;
    printf("Enter the number of vertices: ");
    scanf("%d", &nV);
    Graph aGraph = newGraph(nV);
    while (1)
    {
        printf("Enter an edge (from): ");
        scanf("%s", ver);
        if (strcmp(ver, "done") == 0)
        {
            printf("Finished.\n");
            break;
        }
        else
        {
            v = atoi(ver);
            printf("Enter an edge (to): ");
            scanf("%d", &w);
            e.v = v;
            e.w = w;
            insertEdge(aGraph, e);
        }
    }
    showGraph(aGraph);

    int maxdeg = 0, mindeg = nV, deg[nV];
    for (v = 0; v < nV; v++)
    {
        deg[v] = 0;
        for (w = 0; w < nV; w++)
        {
            if (adjacent(aGraph, v, w))
            {
                deg[v]++;
            }
        }
        if (deg[v] >= maxdeg)
        {
            maxdeg = deg[v];
        }
        if (deg[v] <= mindeg)
        {
            mindeg = deg[v];
        }
    }
    printf("Minimum degree: %d\n", mindeg);
    printf("Maximum degree: %d\n", maxdeg);

    printf("Nodes of minimum degree:\n");
    for (v = 0; v < nV; v++)
    {
        if (deg[v] == mindeg)
        {
            printf("%d\n", v);
        }
    }
    printf("Nodes of maximum degree:\n");
    for (v = 0; v < nV; v++)
    {
        if (deg[v] == maxdeg)
        {
            printf("%d\n", v);
        }
    }

    printf("Triangles:\n");
    Vertex v1, v2, v3;
    for (v1 = 0; v1 < nV - 2; v1++)
    {
        for (v2 = v1 + 1; v2 < nV - 1; v2++)
        {
            if (adjacent(aGraph, v1, v2))
            {
                for (v3 = v2 + 1; v3 < nV; v3++)
                {
                    if (adjacent(aGraph, v2, v3))
                    {
                        if (adjacent(aGraph, v1, v3))
                        {
                            printf("%d-%d-%d\n", v1, v2, v3);
                        }
                    }
                }
            }
        }
    }

    return EXIT_SUCCESS;
}