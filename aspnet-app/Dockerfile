# Dockerfile SENGAJA tidak selamat: digunakan untuk latihan IaC dan scan image.
FROM mcr.microsoft.com/dotnet/sdk:10.0

RUN apt-get update && apt-get install -y iputils-ping curl

ENV Jwt__Secret=HnaD81tLfbuX877uIa9v4IYQ
ENV ASPNETCORE_URLS=http://+:8080

WORKDIR /app
COPY . .
RUN dotnet publish -c Release -o /app/out

WORKDIR /app/out
EXPOSE 8080
ENTRYPOINT ["dotnet", "AspNetLab.dll"]
