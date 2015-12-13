using UnityEngine;
using System.Collections;

public class BackCatalog1 : MonoBehaviour {

    public GameObject BackCatalog1Object;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        BackCatalog1Object.SetActive(true);
    }

    public void disappear()
    {
        BackCatalog1Object.SetActive(false);
    }
}